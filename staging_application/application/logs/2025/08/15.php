<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-08-15 00:01:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 00:01:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 00:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 00:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 03:04:32 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-08-15 03:04:32 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-08-15 03:04:51 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-08-15 03:04:51 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-08-15 03:13:37 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 03:13:37 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 03:17:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 03:17:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 03:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 03:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 04:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 04:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 04:47:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-08-15 04:47:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-08-15 04:59:04 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 04:59:04 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 05:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 05:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 06:06:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-08-15 06:06:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-08-15 07:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 07:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 07:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 07:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 07:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 07:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 07:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:21:20 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 07:21:20 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 07:21:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:21:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:21:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:21:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.token ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.token ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env_1.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env_1.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: @fs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/rules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/rules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.back ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.crt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.gcp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.gcp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.tmp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.uat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.uat ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.azure ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.azure ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 07:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 07:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 08:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 08:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: À ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/ami-id ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/ami-id ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/hostname ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/hostname ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam/info ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam/info ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam/security-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam/security-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam/security-credentials/aws-elasticbeanstalk-ec2-role ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam/security-credentials/aws-elasticbeanstalk-ec2-role ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam/security-credentials/aws-sdk-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam/security-credentials/aws-sdk-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam/security-credentials/ec2-instance-role ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam/security-credentials/ec2-instance-role ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam/security-credentials/ecsTaskExecutionRole ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/iam/security-credentials/ecsTaskExecutionRole ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/instance-id ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/instance-id ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/instance-type ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/instance-type ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/local-ipv4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/local-ipv4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/network/interfaces/macs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/network/interfaces/macs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/network/interfaces/macs/mac ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/network/interfaces/macs/mac ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/network/interfaces/macs/mac/subnet-id ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/network/interfaces/macs/mac/subnet-id ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/network/interfaces/macs/mac/vpc-id ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/network/interfaces/macs/mac/vpc-id ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/placement ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/placement ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/placement/availability-zone ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/placement/availability-zone ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/public-hostname ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/public-hostname ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/public-ipv4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/meta-data/public-ipv4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/user-data ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.169.254/latest/user-data ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.170.2/latest/meta-data ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.170.2/latest/meta-data ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.170.2/v2/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.170.2/v2/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.170.2/v2/credentials/container-role ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.170.2/v2/credentials/container-role ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.170.2/v2/credentials/ecsTaskExecutionRole ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.170.2/v2/credentials/ecsTaskExecutionRole ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.170.2/v2/metadata ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 169.254.170.2/v2/metadata ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Node.js/JavaScript ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Node.js/JavaScript ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Properties/launchSettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Properties/launchSettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __tests__/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/app.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/app.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/command.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/command.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/merchant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/merchant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/partner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/controllers/partner.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db_dump.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db_dump.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/graphql/explore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/graphql/explore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/internal/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/internal/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/rce.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/rce.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/run.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/run.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/secret was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/secret was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/terminal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/terminal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: android_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: android_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: angular.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apache.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:17 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2025-08-15 09:33:17 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-08-15 09:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/dev/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/dev/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/production/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/production/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/staging/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/staging/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/v1/openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/v1/openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/v2/openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/v2/openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/v2/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-gateway/v2/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:44 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-08-15 09:33:44 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-08-15 09:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/cloudfront was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/cloudfront was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/cognito was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/cognito was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/iam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/iam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/lambda was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/lambda was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/s3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/s3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/ses was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/ses was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/sns was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/sns was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:33:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/token was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:33:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/aws/token was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/bash was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/bash was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/command was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/command was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:34:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:34:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/db_dump.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/db_dump.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/execute was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/execute was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/healthz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/healthz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/internal-aws was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/internal-aws was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/key was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/key was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/objects/codes.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/objects/codes.php.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/rce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/rce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/run was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/run was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/token was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/token was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/token.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/token.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/aws/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/aws/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/aws/token was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/aws/token was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/token was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/token was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 09:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/core.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/core.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/code/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/config.local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/config.local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/config/core.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/config/core.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/local.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/settings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/settings.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/autoload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/autoload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/doctypes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/doctypes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/email.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/email.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/encryption.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/encryption.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/foreign_chars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/foreign_chars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/hooks.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/hooks.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/migration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/migration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/mimes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/mimes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/profiler.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/profiler.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/routes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/routes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.QA.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.QA.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.qa.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.qa.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: archive/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL artisan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL artisan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asdf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws-api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env.ses ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/.env.ses ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway/openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway/openapi.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway/tokens.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/api-gateway/tokens.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/cloudfront/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/cloudfront/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/cloudfront/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/cloudfront/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/cognito/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/cognito/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/cognito/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/cognito/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/cognito/token.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/cognito/token.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/ecs/task-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/ecs/task-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ecs/task-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ecs/task-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/eks/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/eks/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/eks/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/eks/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/env_vars.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/env_vars.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/assume-role.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/assume-role.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/ecs-task-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/ecs-task-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/iam/role-assume was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/iam/role-assume was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/role-chain.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/role-chain.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/temp-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/temp-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/iam/temp-keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/iam/temp-keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/iam/temporary-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/iam/temporary-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/temporary.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/iam/temporary.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/keys_backup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/keys_backup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/lambda/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/lambda/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/lambda/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/lambda/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/metadata.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/metadata.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata/iam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata/iam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata/iam/security-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata/iam/security-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata/iam/security-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata/iam/security-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/credentials.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/credentials.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/private.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/private.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/public-bucket.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/public-bucket.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/public-buckets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/public-buckets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/public.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/public.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/tokens.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/tokens.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/tokens.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/tokens.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses_smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses_smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/sts/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/sts/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/sts/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/sts/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/token.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/token.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_creds.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_creds.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_lambda/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_lambda/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_lambda/handler.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_lambda/handler.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_lambda/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_lambda/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_lambda/token.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_lambda/token.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awstats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/default.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/default.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/app.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/app.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/postgres/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bash.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bash.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bootstrap/cache/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundleconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundleconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certs/fullchain.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certs/fullchain.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certs/privkey.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: certs/privkey.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci-cd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci-cd/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cloud was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cloud was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront/api-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront/api-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: command.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: command.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1beta1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1beta1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application-dev.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application-dev.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application-prod.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application-prod.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application-test.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application-test.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/dev-application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/dev-application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/development.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/development.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/logback.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/logback.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL conf/messages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL conf/messages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/play.plugins ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/play.plugins ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/prod-application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/prod-application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/production.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/production.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL conf/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL conf/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:40:04 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-08-15 09:40:04 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.htpasswd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.htpasswd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/acl.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/acl.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app_local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app_local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application-test.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application-test.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/asgi.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/asgi.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/autoload/global.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/autoload/global.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/autoload/local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/autoload/local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bootstrap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bootstrap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/broadcasting.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/broadcasting.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cable.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cable.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cli_bootstrap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cli_bootstrap.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:31 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-08-15 09:40:31 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/configmap.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/configuration.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/configuration.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/connections.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/connections.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml.enc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/daemon.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/daemon.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/deploy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/deploy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/deployment.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev_config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev_config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose.dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose.dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:38 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-08-15 09:40:38 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/email.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/email.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/development.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/test.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/test.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/filesystems.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/filesystems.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ingress.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/ingress.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/devise.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/devise.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/session_store.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/session_store.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/sidekiq.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/sidekiq.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/kubeconfig.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/kubeconfig.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mailer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/models.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/models.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/module.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/module.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/namespace.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/namespace.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/cache.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/cache.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/dev/twig.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/dev/twig.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/doctrine.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/doctrine.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/framework.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/framework.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/prod/doctrine.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/prod/doctrine.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/security.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/security.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/sendgrid.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/sendgrid.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/test.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/test.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/test/security.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/test/security.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/twig.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/packages/twig.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/paths.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/paths.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/pod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/pod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/policies.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/policies.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/private/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod_config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod_config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puma.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puma.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/queue.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/queue.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/requirements.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/requirements.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/role.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/role.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/rolebinding.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/rolebinding.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes/dev/twig.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/routes/dev/twig.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secret.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/dev/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/dev/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/prod/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets/prod/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendinblue.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sendinblue.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/__init__.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/__init__.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/base.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/sendgrid_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/smtp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sockets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/sockets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/storage.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test_config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test_config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/views.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/views.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wsgi.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/wsgi.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes-4aug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes-4aug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/routes.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/admin/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/admin/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/api/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/api/post.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cookbooks was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cookbooks was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/Datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/datavase/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cronlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL data/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL data/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL data_bags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL data_bags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.dump ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.dump ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.dump ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.dump ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/default/view.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug/default/view.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/pprof was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/pprof was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: desktop_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: desktop_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device/device.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device/device.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_app/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: django_app/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.override.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dotenv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ecs/task-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ecs/task-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecs/task-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecs/task-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL eks/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL eks/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL eks/secrets/iam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL eks/secrets/iam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: electron_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: electron_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/smtp_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email/smtp_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL environments was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL environments was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL environments/dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL environments/dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL environments/prod was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL environments/prod was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/chef/client.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/chef/client.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/chef/encrypted_data_bag_secret was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/chef/encrypted_data_bag_secret was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/chef/knife.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/chef/knife.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/chef/solo.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/chef/solo.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/code/environments/development/manifests/site.pp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/code/environments/development/manifests/site.pp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/code/environments/production/manifests/site.pp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/code/environments/production/manifests/site.pp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/code/hiera.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/code/hiera.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/puppetlabs/code/modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/puppetlabs/code/modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/code/modules/apache/manifests/init.pp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/code/modules/apache/manifests/init.pp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/puppet/auth.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/puppet/auth.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/puppet/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/puppet/environment.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/puppet/puppet.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/puppet/puppet.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/puppet/routes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/puppetlabs/puppet/routes.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/puppetlabs/puppet/ssl was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/puppetlabs/puppet/ssl was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: exapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_app/.env.dev ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_app/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flask_app/.env.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/js/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/js/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL frontend/web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL frontend/web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game_engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: game_engine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-browser.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-browser.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-node.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-node.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-ssr.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gatsby-ssr.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcpuutil.php-bakworking ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: getcpuutil.php-bakworking ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gists/cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gists/cache was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql-explorer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql-explorer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/playground was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/playground was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group_vars/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group_vars/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/EmailHelper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helper/EmailHelper.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/utility.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpers/utility.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL host_vars/local was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL host_vars/local was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hosting.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hosting.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: id_rsa.pub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.old.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.old.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: init.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/sendgrid_keys.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: instance/sendgrid_keys.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal-api/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal-api/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal-api/aws/iam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal-api/aws/iam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal-api/aws/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal-api/aws/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal-api/iam/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal-api/iam/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/169.254.169.254/latest/meta-data/iam/security-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/169.254.169.254/latest/meta-data/iam/security-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/aws/iam/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/aws/iam/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/aws/metadata.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/aws/metadata.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal/proxy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL inventory/hosts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL inventory/hosts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ios_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ios_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: java_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: java_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/secrets/hudson.util.Secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/secrets/hudson.util.Secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/secrets/hudson.util.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/secrets/hudson.util.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/secrets/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jenkins/secrets/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jobs/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL k8s/eks/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL k8s/eks/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL k8s/eks/secrets/aws was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL k8s/eks/secrets/aws was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/eks/token.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/eks/token.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL k8s/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL k8s/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL k8s/secrets/aws was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL k8s/secrets/aws was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL k8s/secrets/iam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL k8s/secrets/iam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: karma.conf.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/public.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/public.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/eks/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/eks/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kubernetes/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kubernetes/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kyc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lara/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env.example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data/iam/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data/iam/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data/iam/security-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data/iam/security-credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/user-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/user-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: launchSettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: launchSettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: launchsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: launchsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL live_env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL live_env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.bak.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.old.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.old.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/computeMetadata/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/computeMetadata/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/name was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/name was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/plan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/plan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/platformFaultDomain was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/platformFaultDomain was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/resourceGroupName was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/resourceGroupName was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/subscriptionId was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/subscriptionId was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/tags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/tags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/vmId was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/vmId was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/vmSize was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/vmSize was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/zone was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance/compute/zone was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/instance/network/interface/0/ipv4/ipAddress/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/instance/network/interface/0/ipv4/ipAddress/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/instance/network/interface/0/ipv4/ipAddress/0/privateIpAddress ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/instance/network/interface/0/ipv4/ipAddress/0/privateIpAddress ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/instance/network/interface/0/ipv4/ipAddress/0/publicIpAddress ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/instance/network/interface/0/ipv4/ipAddress/0/publicIpAddress ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meteor.settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meteor.settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mnt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mnt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobile/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/sendgrid_mail.module ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/sendgrid_mail.module ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/sendgrid_mail.services.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/sendgrid_mail.services.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/sendgrid_mail.settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/sendgrid_mail.settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/translations/sendgrid_mail.fr.po ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/contrib/sendgrid_mail/translations/sendgrid_mail.fr.po ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/chakaash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/chakaash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/newsletter.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/newsletter.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/palash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_env/palash.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.my.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.my.cnf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqldump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqldump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mytest/astech_robot.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mytest/astech_robot.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nginx/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node.js/javascript ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node.js/javascript ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env_example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env_example ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/**/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/**/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nodes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nodes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuget.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuget.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuxt.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: packages/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: partner/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pg_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pg_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pgsql.dump ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pgsql.dump ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline/jobs/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pipeline/jobs/config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbooks/db.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbooks/db.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbooks/site.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbooks/site.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbooks/web.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: playbooks/web.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL policies was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL policies was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/aws_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL private/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL private/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL private/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL private/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: private/smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env.test ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: properties/launchsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: properties/launchsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protractor.conf.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: protractor.conf.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: provider.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: provider.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: psnlink/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/aws_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/aws_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/bucket.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/bucket.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/client/planinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/client/planinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/db_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/db_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/s3-bucket.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/s3-bucket.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/storage.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/storage.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/s3-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/uploads/s3-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails_app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rails_app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rce.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rce.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_app/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_app/.env.development ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: react_app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: redmine/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL roles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL roles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roles/common/tasks/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roles/common/tasks/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roles/db/tasks/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roles/db/tasks/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roles/web/tasks/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roles/web/tasks/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ruby_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ruby_app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-access.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-access.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-bucket-list.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-bucket-list.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-bucket.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-bucket.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/presigned was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/presigned was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/presigned-links was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/presigned-links was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/presigned-url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/presigned-url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/presigned-urls was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/presigned-urls was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/public/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/public/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/public/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/public/keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: saas/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sapi/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sapi/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/nodemailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/nodemailer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL secrets/initialAdminPassword was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL secrets/initialAdminPassword was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL secrets/initialadminpassword was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL secrets/initialadminpassword was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/jenkins.util.Secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/jenkins.util.Secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/jenkins.util.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/jenkins.util.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/master.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/secret.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/secret.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL secrets/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL secrets/sendgrid_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL secrets/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL secrets/sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secured/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secured/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_email/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sendgrid_keys was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendinblue.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendinblue.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendinblue.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendinblue.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/environment.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/s3.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/email_service.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/email_service.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ses_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL session was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL session was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:50:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2025-08-15 09:50:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-08-15 09:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2025-08-15 09:50:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-08-15 09:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL signin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL signin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/app.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/app.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sms.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sms.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/backup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/backup.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/private.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp/private.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring_boot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spring_boot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.testing ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env.testing ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/app.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/app.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/configuration.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/configuration.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/settings.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/settings.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/configuration.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/configuration.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.dev.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.dev.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.prod.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.prod.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.staging.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.staging.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.test.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.test.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-context.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-test.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-test.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/appsettings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/appsettings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/bootstrap.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/bootstrap.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/bootstrap.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/bootstrap.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/database.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/database.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/log4j2.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/log4j2.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/logback-spring.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/logback-spring.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/security.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/security.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/setupProxy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/setupProxy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/setupTests.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/setupTests.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/setupproxy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/setupproxy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/setuptests.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/setuptests.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/site.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ssh/id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ssh/id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/id_rsa.pub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssh/id_rsa.pub ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/cert.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/cert.pem ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/certs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ssl/private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/2.ca066a4b.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/2.ca066a4b.chunk.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.e85f7a37.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.e85f7a37.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL staticfiles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL staticfiles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/oauth-private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/oauth-private.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/oauth-public.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/oauth-public.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/sendgrid.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL symfony/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL symfony/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL symfony/public was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL symfony/public was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL symfony/public/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL symfony/public/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terminal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terminal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/test-become/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/*/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: time.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.aws/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.aws/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.aws/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.aws/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/aws_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/aws_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/aws_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/db_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/db_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/execute.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL token was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL token was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/view/phpinfo.view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tool/view/phpinfo.view.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.spec.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tsconfig.spec.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unity/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unity_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unity_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unreal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unreal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unreal_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unreal_project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/controllers/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/controllers/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/bin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/local/project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/sbin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/share/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/share/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/log/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/bootstrap/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/public/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/routes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/routes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/vhosts/*/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/vhosts/*/env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/vhosts/*/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/vhosts/*/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/**/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/**/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.aws ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.aws/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.aws/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.aws/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.aws/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/aws/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL vendor/aws/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL vendor/aws/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL vendor/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL vendor/aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/aws/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/aws/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/aws/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/aws/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/**/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/laravel/**/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/symfony/**/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/symfony/**/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vue.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.Debug.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.Debug.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.Release.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.Release.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.release.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.release.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/logs/HEAD ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.gitignore ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/bundle.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/debug.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web/debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/index-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/main.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/site.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-admin/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php-backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.swp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/backup/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-mail-smtp/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-mail-smtp/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/wp-mail-smtp/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/uploads/wp-mail-smtp/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/sendgrid_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Node.js/JavaScript ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Node.js/JavaScript ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL symfony/public was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 09:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL symfony/public was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 09:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 09:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ds.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 09:55:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 09:55:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 10:03:24 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 10:03:24 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-mod/header_logo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-mod/header_logo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 5Fqp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 5Fqp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ise/img/rm-logo_small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ise/img/rm-logo_small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-mod/header_logo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-mod/header_logo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 10:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ise/img/rm-logo_small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ise/img/rm-logo_small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/server/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 10:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/server/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 10:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL versa/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL versa/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL p/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL p/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 10:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/list.query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/list.query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/param.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/param.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 10:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:03:35 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 10:03:35 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 10:03:43 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 10:03:43 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 10:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 10:14:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL systembc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:14:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL systembc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:17:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL systembc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 10:17:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL systembc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 10:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 10:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:10:01 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-08-15 12:10:01 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-08-15 12:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets../.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 12:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 12:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global-protect/login.esp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 13:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 13:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 13:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 13:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 14:11:44 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 14:11:44 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 14:23:36 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 14:23:36 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 15:00:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 15:00:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 15:00:23 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 15:00:23 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-mod/header_logo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-mod/header_logo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:24 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 15:00:24 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ise/img/rm-logo_small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ise/img/rm-logo_small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 15:00:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1755259223 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1755259223 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1755259223 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1755259223 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL VaaD was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL VaaD was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL EzZC was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL EzZC was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/list.query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/list.query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/list.query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/list.query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/server/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/server/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: language/en-GB/en-GB.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: language/en-GB/en-GB.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/manifests/files/joomla.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/manifests/files/joomla.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: language/en-GB/en-GB.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: language/en-GB/en-GB.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL versa/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL versa/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL versa/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL versa/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL p/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL p/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-mod/header_logo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-mod/header_logo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dniapi/userInfos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dniapi/userInfos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/param.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/param.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lms/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lms/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ise/img/rm-logo_small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ise/img/rm-logo_small.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lms/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lms/db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/param.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/param.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/login.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/login.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/login.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/login.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL allversions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL allversions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r-seenet/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r-seenet/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL allversions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL allversions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL versions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL versions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vip/i18n/api/v2/translation/products/vRNIUI/versions/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vip/i18n/api/v2/translation/products/vRNIUI/versions/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tos/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tos/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL c/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL c/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL p/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL p/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebApp/js/UI_String.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebApp/js/UI_String.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL versions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL versions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r-seenet/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r-seenet/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/html/localization.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/html/localization.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/cgi/cgiChkMasterPwd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/cgi/cgiChkMasterPwd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kylin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kylin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1.0/environment ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1.0/environment ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IPCamDesc.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IPCamDesc.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-08-15 15:00:31 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vip/i18n/api/v2/translation/products/vRNIUI/versions/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vip/i18n/api/v2/translation/products/vRNIUI/versions/1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tos/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tos/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cslu/v1/core/conf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cslu/v1/core/conf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/updates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/updates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL c/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL c/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webportal.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webportal.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebApp/js/UI_String.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WebApp/js/UI_String.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/eonweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/eonweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pandora_console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pandora_console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/html/localization.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/html/localization.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/meta was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v3/meta was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/cgi/cgiChkMasterPwd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: officescan/console/cgi/cgiChkMasterPwd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IPCamDesc.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IPCamDesc.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kylin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kylin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1.0/environment ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v1.0/environment ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL am_bin/amlogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL am_bin/amlogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/version/current was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/version/current was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-08-15 15:00:33 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cslu/v1/core/conf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cslu/v1/core/conf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CHANGELOG.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/manifests/files/joomla.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/manifests/files/joomla.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/elfinder.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/elfinder.min.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL i18n/component/JS was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL i18n/component/JS was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hx/api/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hx/api/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/updates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/updates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/reports/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build.gradle ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/server/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/server/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/ui/login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/ui/login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workplace/home.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workplace/home.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webportal.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webportal.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MagicInfo/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MagicInfo/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin/webs_model_cfg.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin/webs_model_cfg.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/luci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/eonweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 15:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/eonweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 15:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pandora_console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pandora_console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 15:00:39 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 15:00:39 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 15:00:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 15:00:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 15:20:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 15:20:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 17:29:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 17:29:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 17:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 17:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1755268140 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 17:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 17:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1755268140 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 17:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 17:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 17:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 17:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 17:29:02 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 17:29:02 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 17:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 17:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 19:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 19:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 19:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 19:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 19:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 19:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 19:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 20:15:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 20:15:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 20:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 20:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 20:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 20:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 20:43:41 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-08-15 20:43:41 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-08-15 21:12:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 21:12:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 21:15:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 21:15:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webshell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 21:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 21:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webshell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 21:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 21:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 21:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 21:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 21:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 21:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 21:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 21:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 21:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 21:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 21:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 21:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 22:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WebInterface was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 22:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WebInterface was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 23:28:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-08-15 23:28:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-08-15 23:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 23:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 23:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 23:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 23:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 23:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 23:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 23:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 23:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 23:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 23:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 23:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 23:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 23:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 23:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 23:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 23:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 23:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 23:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 23:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-08-15 23:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 23:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 23:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-08-15 23:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-08-15 23:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-08-15 23:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}