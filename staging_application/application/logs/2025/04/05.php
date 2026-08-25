<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-04-05 00:00:09 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-05 00:00:09 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-05 00:21:53 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-05 00:21:53 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-05 01:35:11 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-05 01:35:11 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-05 02:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 02:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 02:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 03:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mailman/listinfo/mailman was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 03:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mailman/listinfo/mailman was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 04:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 04:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 04:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 04:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 04:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 04:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 04:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 04:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 04:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 04:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 04:48:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 04:48:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 05:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 05:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 05:17:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 05:17:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 05:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 05:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 05:21:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 05:21:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dot.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dot.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __macosx/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __macosx/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconf.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconf.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 07:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 07:54:57 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-05 07:54:57 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-05 09:07:21 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-05 09:07:21 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-05 09:44:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 09:44:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 09:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 09:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 10:26:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-05 10:26:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-05 10:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 10:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 10:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 10:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 10:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apis was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 10:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apis was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 11:06:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-05 11:06:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-05 11:51:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-05 11:51:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-05 13:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 13:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 14:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 14:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 14:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 14:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:22:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:22:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 14:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 14:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 15:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 15:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 15:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 15:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 15:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 15:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 15:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 15:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 15:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 15:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 16:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 16:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: en/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: external/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utility/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utility/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: utils/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alpha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ui/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/migrations/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: classes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: models/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: models/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authentication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authentication/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certificate/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certificate/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certificates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certificates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/certificates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/certificates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/ssl/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/ssl/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: builder/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: builder/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: github/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/share/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/share/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/share/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/share/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accounts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: members/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archives/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archives/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/archives/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/archives/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database_backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mariadb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mariadb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgresql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postgresql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mongodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: memcached/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: solr/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: solr/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sphinx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sphinx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cassandra/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cassandra/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: couchdb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dynamodb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-key/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_dsa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_dsa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authorized_keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: authorized_keys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: known_hosts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: known_hosts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cert/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: file/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: report/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: report/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: statistics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: statistics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: analytics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metrics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metrics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: telemetry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: telemetry/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: event/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: event/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: process/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: process/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: job/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schedule/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: schedule/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduler/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduler/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crontab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crontab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduled/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scheduled/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: task/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tasks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tasks/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queues/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: queues/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: worker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: worker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: messages/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: messages/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notification/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notification/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notifications/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: notifications/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendmail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendmail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfix/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: postfix/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newsletter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscription/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscription/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: subscriptions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clients/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: clients/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partners/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partners/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: affiliate/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: affiliate/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: affiliates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: affiliates/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendors/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supplier/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supplier/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: suppliers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: suppliers/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: billing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: billing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: invoice/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: invoice/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: invoices/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: invoices/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: checkout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e-commerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e-commerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: commerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: commerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sales/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sales/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: catalog/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: merchandise/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: merchandise/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inventory/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stock/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stock/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: warehouse/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: warehouse/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: order/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: order/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orders/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shipping/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shipping/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fulfillment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fulfillment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: delivery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tracking/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tracking/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: review/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: review/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reviews/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reviews/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rating/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rating/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ratings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ratings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feedback/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: feedback/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: survey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: survey/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: surveys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: surveys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forum/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: community/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: comments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: chat/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message-board/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message-board/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: messaging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: messaging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ticket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ticket/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tickets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tickets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-desk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-desk/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contact/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: faq/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: knowledgebase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: knowledgebase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: search/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: find/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: find/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lookup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lookup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: query/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: query/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-doc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apidoc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apidoc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: documentation/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: specs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: specs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: design/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: design/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wireframe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wireframe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mockup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mockup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sample/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: examples/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showcase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showcase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portfolio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portfolio/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: company/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: company/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: corporate/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: corporate/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: privacy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: privacy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: policy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: policy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compliance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compliance/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sign-in/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sign-in/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sign-out/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sign-out/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: register/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: signup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user-profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user-profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my-account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my-account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my-profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my-profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preferences/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: preferences/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: options/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: options/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-area/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-area/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admincp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admincp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: management/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supervisor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: supervisor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moderator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moderator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mods/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mods/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmaster/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/queue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/queue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/system/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/global/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/global/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/testing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/testing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/azure/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cloud/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/desktop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/desktop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/framework/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/framework/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ecommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ecommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/analytics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/analytics/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/social/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/social/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/account/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/profile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/management/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/management/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin-area/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin-area/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin-dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/admin-dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/control-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/control-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-includes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/drupal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/drupal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/joomla/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/joomla/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/magento/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/opencart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/opencart/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prestashop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prestashop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/shopify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/shopify/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/woocommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/woocommerce/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sitecore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sitecore/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/umbraco/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/umbraco/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/typo3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/typo3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/codeigniter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/codeigniter/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cakephp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cakephp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/zend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/zend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/yii/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/yii/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/django/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/flask/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/flask/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/rails/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/express/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/react/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/angular/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/angular/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/vue/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ember/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ember/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/meteor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/meteor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gatsby/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gatsby/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/next/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/nuxt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/svelte/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/svelte/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backbone/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backbone/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/knockout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/knockout/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jquery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jquery/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/foundation/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/foundation/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tailwind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tailwind/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bulma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bulma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sass/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sass/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/less/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/less/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stylus/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stylus/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/postcss/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/postcss/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/webpack/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/webpack/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gulp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gulp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/grunt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/grunt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/babel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/babel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/typescript/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/typescript/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/eslint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/eslint/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prettier/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prettier/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jest/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mocha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mocha/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/chai/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/karma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/karma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jasmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/jasmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cypress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cypress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/selenium/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/selenium/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/protractor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/protractor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puppeteer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puppeteer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/helm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/helm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/terraform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/terraform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ansible/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ansible/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/chef/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/chef/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puppet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puppet/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/salt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/salt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/apache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/apache/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/traefik/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/haproxy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/haproxy/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/varnish/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/varnish/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 17:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 17:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/redis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 18:03:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-05 18:03:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-05 18:51:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 18:51:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 18:51:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 18:51:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 18:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 18:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 18:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 18:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 18:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 18:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 18:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 18:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 18:51:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 18:51:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 18:51:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 18:51:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 18:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 18:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protected/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: misc/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partners/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partners/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maintenance/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: maintenance/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: magento/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobile/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobile/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resource/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resource/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: legacy/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: styles/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secure/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: member/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: projects/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: migrations/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 19:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 19:27:19 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-05 19:27:19 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-05 20:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 20:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 21:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconf.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconf.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dot.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dot.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __macosx/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __macosx/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webclient was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 21:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webclient was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 21:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 21:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 21:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _poopinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _poopinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 21:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-05 21:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 21:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-05 21:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-05 22:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-05 22:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}