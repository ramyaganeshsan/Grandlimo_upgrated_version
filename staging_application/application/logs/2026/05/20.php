<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2026-05-20 00:51:36 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 00:51:36 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 00:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 00:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 01:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 01:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 01:32:48 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 01:32:48 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 01:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 01:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 02:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 02:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 02:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 02:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 03:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 03:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 03:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 03:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-20 03:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shop/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 03:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shop/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL online/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 03:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL online/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:13:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-05-20 03:13:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-05-20 03:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 03:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 03:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 03:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 03:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 03:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-20 03:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 03:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/php/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/php/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: electron/.env.packaged ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: electron/.env.packaged ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grafana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grafana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storybook/.env.stories ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storybook/.env.stories ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sveltekit/.env.private ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sveltekit/.env.private ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/_profiler/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/_profiler/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/private/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/private/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws-secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws-secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-variables.env.tmpl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-variables.env.tmpl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubclic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubclic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iap/validation_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iap/validation_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/.env.appsettings ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/.env.appsettings ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 03:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ssm/.env.parameters ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 03:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ssm/.env.parameters ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 04:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 04:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 05:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WuEL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 05:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WuEL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 05:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 05:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 05:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file.ext ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 05:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file.ext ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 05:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SiteLoader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 05:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SiteLoader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 05:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mPlayer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 05:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mPlayer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 06:16:48 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 06:16:48 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 07:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 07:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 09:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 09:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 09:26:56 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 09:26:56 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 09:27:31 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 09:27:31 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 09:28:05 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 09:28:05 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 09:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 09:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 09:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 09:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 09:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 09:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL : was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL : was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL input was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL input was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ssc_animtime was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ssc_animtime was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL div was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL div was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL = was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL = was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL advance-search.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-05-20 10:24:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-20 10:24:25 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
2026-05-20 10:24:25 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/siteusers.php [ 1667 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-05-20 10:24:25 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2026-05-20 10:24:25 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-05-20 10:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:28 --- ERROR: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
2026-05-20 10:24:28 --- STRACE: ErrorException [ 8 ]: Undefined index: lang ~ APPPATH/classes/controller/users.php [ 3869 ]
--
#0 /var/www/html/application/classes/controller/users.php(3869): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 3869, Array)
#1 [internal function]: Controller_Users->action_change_language()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Users))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-05-20 10:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dt was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dt was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap_index.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap_index.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ul was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ul was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chrome/.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chrome/.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e.6.q ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e.6.q ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL MMMM was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL MMMM was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: g.params.slidesPerView ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: g.params.slidesPerView ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 100 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 100 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL li was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL li was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1i was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1i was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 3N was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 3N was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL span was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL span was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL L was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL L was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/braket/.env.quantum ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/braket/.env.quantum ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pm2.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pm2.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withRedis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withRedis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMySQL/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMySQL/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Jenkinsfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withPostgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withPostgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myapp/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myapp/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certs/server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certs/server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tf/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tf/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/configprops was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: celery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: celery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-production.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pm2.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pm2.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kubeconfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kubeconfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dbconfig.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dbconfig.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/braket/.env.quantum ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/braket/.env.quantum ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/mappings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/mappings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: discourse/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: discourse/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/databases.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/databases.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prometheus/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prometheus/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grafana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grafana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elastic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elastic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ghost/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ghost/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL secrets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL secrets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL spring/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL spring/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _manage/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _manage/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/httptrace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/beans was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/beans was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: airflow/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: airflow/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kibana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kibana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/httptrace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2026-05-20 10:39:18 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/server.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service_account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service_account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/auditevents was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/auditevents was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL passwd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL passwd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_ecdsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_ecdsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_dsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_dsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/metrics was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/metrics was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp-deploy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp-deploy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/run/secrets/kubernetes.io/serviceaccount/token ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/run/secrets/kubernetes.io/serviceaccount/token ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shadow was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shadow was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_ed25519 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_ed25519 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Gemfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Gemfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schema.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schema.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Makefile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Makefile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db1.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db1.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/script was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.temp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/script was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/loggers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/logfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/loggers was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/shutdown was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/shutdown was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/Web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/Web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/flyway was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/flyway was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/dump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/dump was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/healthcheck was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/healthcheck was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubectl.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubectl.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: arm_template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: arm_template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doctl/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doctl/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL firebaserc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL firebaserc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/lambda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/lambda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ec2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ec2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/namespace.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/namespace.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret_key.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret_key.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group_vars/all/vault.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group_vars/all/vault.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: heroku.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: heroku.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/outputs.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/outputs.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/rds/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/rds/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service_account_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service_account_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Procfile.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Procfile.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s-config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s-config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifests/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifests/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azureconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azureconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/woocommerce_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/woocommerce_uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: GoogleService-Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: GoogleService-Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/devise.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/devise.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifests/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifests/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dbconfig.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dbconfig.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: railway.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: railway.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/master.key.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myapp/local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myapp/local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/secret_token.rb.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/secret_token.rb.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/databases.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/databases.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfvars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfvars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/roles/app/vars/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/roles/app/vars/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tf/variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tf/variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbooks/vars/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbooks/vars/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skaffold.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skaffold.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/roles/common/vars/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/roles/common/vars/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fly.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fly.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helmfile.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helmfile.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helmfile.d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helmfile.d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localsettings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db1.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db1.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL inventory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL inventory was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ss_database_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ss_database_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schema.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schema.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cable.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cable.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysite/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysite/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/script was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jenkins/script was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-settings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-settings.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chef/data_bags/users/admin.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chef/data_bags/users/admin.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml.default ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flaskapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flaskapp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/wflogs/rules.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/wflogs/rules.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host_vars/localhost/vault.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host_vars/localhost/vault.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysite/local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysite/local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/secrets.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/secrets.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/redis.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/redis.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tekton/secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tekton/secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: . ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: . ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tekton/pipeline.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tekton/pipeline.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drone.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drone.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wrangler.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wrangler.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml.enc.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml.enc.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinnaker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinnaker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dev.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/dev.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env_copy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env_copy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/test.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: concourse/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: concourse/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/staging.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/staging.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/framework/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/framework/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/dev.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/dev.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/twilio.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/twilio.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysite/settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysite/settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/schema.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/schema.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/production.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/production.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/omniauth.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/omniauth.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/aws.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/aws.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/stripe.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/stripe.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: out/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: out/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/staging.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/staging.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/seeds.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/seeds.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/production.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/production.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ec2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ec2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helmfile.d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helmfile.d/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppgadmin/conf/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppgadmin/conf/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.conf.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.conf.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helmfile.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helmfile.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/roles/common/vars/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/roles/common/vars/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/values.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: squirrelmail/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: squirrelmail/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/config/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/config/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgresql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgresql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pgadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pgadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: charts/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mariadb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mariadb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/config.default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/config.default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service_account_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service_account_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/lambda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/lambda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/outputs.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/outputs.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure.credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure.credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: GoogleService-Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: GoogleService-Info.plist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/configuration.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: railway.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: railway.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL firebaserc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL firebaserc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: heroku.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: heroku.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Procfile.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Procfile.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: render.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: render.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doctl/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doctl/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubeconfig.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubeconfig.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skaffold.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fly.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skaffold.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fly.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/rds/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/rds/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: versions/current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: versions/current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/namespace.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/namespace.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/latest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/latest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/v1.0.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/v1.0.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/v2.0.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/v2.0.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drone.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drone.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: artifacts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: artifacts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infra/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/production.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/production.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws_credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundled/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundled/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/host_vars/localhost.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/host_vars/localhost.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL messages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL messages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/roles/app/vars/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/roles/app/vars/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: arm_template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: arm_template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL syslog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL syslog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ops/k8s/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: concourse/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: concourse/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ca.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ca.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/vars/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/vars/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Jenkinsfile.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Jenkinsfile.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbooks/vars/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbooks/vars/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tekton/secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tekton/secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/vars/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/vars/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: . ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: . ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group_vars/all/vault.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group_vars/all/vault.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinnaker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spinnaker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbooks/group_vars/all.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbooks/group_vars/all.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Copy of .env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Copy of .env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web.Release.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web.Release.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App.Release.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App.Release.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.sum ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.sum ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle.kts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle.kts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web.Debug.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web.Debug.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.User.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.User.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault.hcl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault.hcl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Override.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Override.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App.config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App.config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oscommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oscommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Properties/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Properties/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App.Debug.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App.Debug.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gradle.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gradle.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Properties/Settings.settings ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Properties/Settings.settings ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opencart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opencart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/metadata/version.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/metadata/version.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jvm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jvm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mariadb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mariadb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blazor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blazor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppgadmin/conf/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phppgadmin/conf/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gradle/wrapper/gradle-wrapper.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gradle/wrapper/gradle-wrapper.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/db.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usersecrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usersecrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.conf.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis.conf.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotnet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotnet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify.app.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify.app.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/config/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/config/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.transform ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.transform ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kotlin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kotlin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/production.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/production.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: virtuemart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: virtuemart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/production.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/production.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roundcube/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directus/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directus/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache2/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: woocommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: woocommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SignalR/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SignalR/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directus/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directus/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1password.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1password.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL syslog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL syslog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings_data.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings_data.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgresql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgresql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: versions/current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: versions/current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundled/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundled/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: traefik/traefik.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: traefik/traefik.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sidecar/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sidecar/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/app.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: haproxy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: haproxy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/v1.0.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/v1.0.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: caddy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: caddy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: artifacts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: artifacts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/schema.prisma ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/schema.prisma ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: containers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: containers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jupyter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jupyter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/latest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/latest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sanity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sanity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pulumi.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pulumi.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/shop.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/shop.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pulumi.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pulumi.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Caddyfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Caddyfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: code/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proxy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nginx/sites-available/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nginx/sites-available/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pods/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pods/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supabase/config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supabase/config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pulumi.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pulumi.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/runtime.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/runtime.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/v2.0.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/v2.0.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/conf.d/default.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/conf.d/default.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: billing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: billing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: android/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: android/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contentful/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contentful/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locked/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locked/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pulumi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pulumi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ios/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ios/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supabase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supabase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .ssh/id_rsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .ssh/id_rsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings_data.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings_data.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sanity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sanity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App.Release.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App.Release.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.transform ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.transform ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supabase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supabase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App.Debug.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App.Debug.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contentful/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contentful/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify.app.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify.app.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directus/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directus/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gradle.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gradle.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle.kts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle.kts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jvm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jvm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supabase/config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supabase/config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/shop.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/shop.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Properties/Settings.settings ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Properties/Settings.settings ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/metadata/version.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/metadata/version.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.sum ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.sum ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web.Debug.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web.Debug.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À®À®À¯.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À®À®À¯.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opencart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opencart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payload/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directus/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: directus/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.User.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.User.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SignalR/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: SignalR/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: woocommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: woocommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: functions/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kotlin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kotlin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/schema.prisma ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/schema.prisma ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prisma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oscommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oscommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web.Release.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Web.Release.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronjob.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronjob.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: runtime.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hasura/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confidential/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confidential/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: import.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: import.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pulumi.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pulumi.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: strapi/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blazor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blazor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locked/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: locked/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sensitive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sensitive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restricted/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: restricted/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App.config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: App.config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pulumi.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pulumi.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pulumi.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Pulumi.prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.env.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: script.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 10:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 10:52:56 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 10:52:56 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 10:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 10:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 10:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2026-05-20 11:44:30 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2026-05-20 11:44:31 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_ubackapi/aws_lambda_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_ubackapi/aws_lambda_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/params.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/params.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/App_Config/ConnectionStrings.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/App_Config/ConnectionStrings.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/params.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/params.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/deployment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_ubackapi/aws_lambda_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_ubackapi/aws_lambda_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/App_Config/ConnectionStrings.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/App_Config/ConnectionStrings.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secured/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secured/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secured/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secured/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinformation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinformation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_sendemail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_sendemail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/ses_sendemail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/ses_sendemail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/*.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/*.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_sendemail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_sendemail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/*.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/*.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinformation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinformation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/ses_sendemail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/ses_sendemail.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/uploads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/uploads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api-config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api-config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api-config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api-config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/uploads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/uploads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Serve_time_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Imagebord/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Imagebord/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Socketio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme-challenge/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Helmetjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Server_with_db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: InstantCV/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Sources/API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adm/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adm/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme_challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme_challenges/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: acme/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Simple_server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app2-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions-server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/services/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/services/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/dev-application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/dev-application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.vscode/sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: collected_static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.1.1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: basic-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/crm/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/crm/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/react-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/react-dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/service/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/service/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL old/xampp/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL old/xampp/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-fr-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-fr-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/development/iinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/development/iinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalVersion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: finalVersion/lcomernbootcamp/projbackend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lemonldap-ng-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profiler/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profiler/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/laravel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/laravel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/openapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/demo/openapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/services/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/services/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/development/iinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/development/iinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/dev/mandrill_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/dev/mandrill_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configure.php.orig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fisdom/fisdom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fisdom/fisdom/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL symfony/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL symfony/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL live/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL live/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL symfony/public/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL symfony/public/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: first-network/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/mailer_dsn.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/mailer_dsn.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL file/php/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL file/php/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admins/xampp/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admins/xampp/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/mailgun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/mailgun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/backend/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/backend/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/mailer.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/mailer.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/dev-application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/dev-application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: connectionstrings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.in ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.in ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/rediscommander/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/sendgrid_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/sendgrid_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/bdd/fixtures/agent-rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spikes/config-material-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spikes/config-material-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webdav/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webdav/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sh.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sh.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/services/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/services/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/persistence/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/crm/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/crm/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/dev/mailgun_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/dev/mailgun_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/framework.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/framework.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whturk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whturk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2021 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2021 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2017 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2017 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-order-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-order-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2010 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2010 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/current/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/current/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.err ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.err ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app1-static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpconf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpconf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/helper/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/helper/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: downloads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/current/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/current/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: agora/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2025 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2025 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project_root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mail/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mail/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dodoswap-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dodoswap-client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-analytics/src/fixtures/analytics-ga-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/plugin-analytics/src/fixtures/analytics-ga-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2016 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2016 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/core/tests/dotenv-files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/core/tests/dotenv-files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packed/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: counterblockd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpsysinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/service/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function/service/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicons/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL frontend/web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL frontend/web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tiedostot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tiedostot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/compose/withMongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/view/phpinfo.view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/view/phpinfo.view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.2.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/tests/9.2.0/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/server.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-info/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.c ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.c ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.3.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: windows/tests/9.3.x/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pub/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/backup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/backup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rasax/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gists/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gists/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config-backup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dir/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/documents/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/documents/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/xampp/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/xampp/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.dump ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.dump ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: well-known/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.good ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.good ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admins/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admins/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys/mailjet_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys/mailjet_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2023 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2023 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2024 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2024 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/services/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/services/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.err ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.err ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~cats/php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~cats/php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whturk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: whturk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2022 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php_old2022 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/default/view.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/default/view.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webstatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webstatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/services/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/services/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/Dockerfile.dev.server ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/Dockerfile.dev.server ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/helper/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/helper/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboardadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboardadmin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/kitchensink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dataset1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/blocks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/blocks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/payments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/payments/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/base/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/base/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/fiber-debugger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fixtures/fiber-debugger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/laravel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/laravel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ledger_sync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ledger_sync/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feature/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leafer-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: leafer-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/current/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/current/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/sdl-first/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patchwork/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patchwork/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oldsanta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/develop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/develop/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pfbe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pfbe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stackato-pkg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/sparkpost_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/sparkpost_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.java ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.java ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/help/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adm/help/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/help/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.ftpconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.ftpconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/smtp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/smtp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-20 11:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 11:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/crm/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/crm/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 11:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 11:52:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ixqx06j2e0j1y0fqet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 11:52:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ixqx06j2e0j1y0fqet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 12:21:12 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 12:21:12 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 12:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 12:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 12:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 9iv6ak7abd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 12:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 9iv6ak7abd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 13:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 13:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 13:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 13:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 13:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 13:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 13:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 13:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 13:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 13:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 13:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-20 13:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 13:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/php/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/php/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: electron/.env.packaged ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: electron/.env.packaged ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grafana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grafana/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storybook/.env.stories ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storybook/.env.stories ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sveltekit/.env.private ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sveltekit/.env.private ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/_profiler/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/_profiler/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/private/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/private/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws-secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws-secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-variables.env.tmpl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web-variables.env.tmpl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubclic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pubclic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iap/validation_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iap/validation_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/.env.appsettings ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspnet/.env.appsettings ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 13:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ssm/.env.parameters ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 13:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ssm/.env.parameters ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 14:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 14:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 15:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 15:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 15:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wiki was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 15:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wiki was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 15:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 15:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 16:22:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: releases/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: drupal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: joomla/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prestashop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codeigniter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codeigniter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cakephp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cakephp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel5/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel5/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: graphql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservice/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservice/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: svelte/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: svelte/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notifications/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notifications/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sender/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sender/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: campaign/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: campaign/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sparkpost/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postmark/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailgun/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mandrill/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailjet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailjet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: brevo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: brevo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: transactional/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: transactional/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bulk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bulk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infrastructure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circleci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circleci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: travis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: travis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildkite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: buildkite/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rabbitmq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kafka/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kafka/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: worker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: worker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uat/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uat/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 16:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 16:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 16:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 16:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 16:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 16:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 16:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 16:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot/index.php/_environment ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot/index.php/_environment ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hosting/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hosting/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmail/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmail/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uat/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uat/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preview/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-sa.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-sa.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application_default_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application_default_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 16:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 16:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 16:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 16:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 16:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 17:22:48 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 17:22:48 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 17:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:35:08 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 17:35:08 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 17:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 17:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 17:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 17:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 17:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 17:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 17:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 17:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 17:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 17:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 17:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-20 17:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 17:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 17:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 17:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 18:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 18:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 18:06:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 365xh7crspa_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 18:06:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 365xh7crspa_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 18:19:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-05-20 18:19:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-05-20 18:19:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-05-20 18:19:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-05-20 18:19:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-05-20 18:19:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-05-20 18:19:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-05-20 18:19:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-05-20 18:19:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-05-20 18:19:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-05-20 18:48:05 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 18:48:05 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 19:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui_wsma_Http was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 19:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui_wsma_Http was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 19:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 19:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 20:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 20:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 20:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 20:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 20:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 8y4w was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 20:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 8y4w was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 20:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL vUME was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 20:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL vUME was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 20:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 20:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 20:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 20:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 20:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 20:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 20:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.2.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 20:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.2.slim.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 20:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 20:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 20:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 20:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 20:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 20:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 20:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 20:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 20:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 20:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 20:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 20:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 20:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 20:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-20 21:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shop/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shop/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL online/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL online/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:55:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-05-20 21:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hibernate.cfg.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hibernate.cfg.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 21:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/etc/passwd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/etc/passwd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/etc/shadow was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/etc/shadow was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/etc/hostname was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/etc/hostname was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/proc/self/environ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/proc/self/environ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/proc/self/cmdline was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 21:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/proc/self/cmdline was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 21:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/home/user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 21:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/home/user/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 22:14:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 22:14:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 22:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1779304468 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 22:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1779304468 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 22:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 22:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 22:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 22:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 22:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 22:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 22:14:30 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 22:14:30 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 22:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 22:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 22:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 22:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 22:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 22:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 22:48:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-05-20 22:48:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-05-20 23:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 23:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 23:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 23:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 23:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 23:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 23:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 23:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 23:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 23:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 23:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 23:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-05-20 23:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 23:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 23:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-05-20 23:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-05-20 23:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 3ma1kmibzyzxp1z13 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-05-20 23:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 3ma1kmibzyzxp1z13 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}