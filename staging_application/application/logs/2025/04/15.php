<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-04-15 00:33:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-15 00:33:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-15 00:55:29 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-15 00:55:29 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-15 01:11:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-15 01:11:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-15 01:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 01:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 02:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/static/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 02:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/static/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 03:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 03:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 03:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 03:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 04:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 04:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 04:17:01 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-15 04:17:01 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-15 04:35:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 04:35:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 06:27:23 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-15 06:27:23 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-15 07:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 07:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 07:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 07:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 07:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 07:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 08:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 08:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 08:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 08:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 08:56:43 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-15 08:56:43 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-15 10:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 10:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 10:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 10:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 10:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 10:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 10:43:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 10:43:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libraries/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: release/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:04:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:04:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:06:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:06:20 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-04-15 11:06:20 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docker-environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docker-environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:06:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php-info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL i was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL i was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-prod.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-prod.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:07:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:07:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:07:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-prod.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:07:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-prod.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.prod.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.dev.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.testing.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.staging.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.staging.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL configuration/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL configuration/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL configuration/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL configuration/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:37 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-04-15 11:07:37 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/development was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/development was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/staging was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/staging was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/testing was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/testing was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/application was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/application was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/app was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/app was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/backend was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/backend was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/frontend was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/frontend was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/local was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/local was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/prod was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/prod was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env/stage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env/stage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-example.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-example.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-sample.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-template.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:08:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:08:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-sysinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_system_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_system_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-system-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-system-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_server_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _dev/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _development/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _debug/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _debug/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _sys/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _sys/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about/php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _internal/server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _internal/server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _private/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _private/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _private/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/phpinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cpanel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:09:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:09:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hidden/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: master/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: control/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sys/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-page.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-page.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-information.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-information.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-vars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-vars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-vars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-vars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system_variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env-variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env-variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment-variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment-variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment_variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment_variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/vars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/vars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/variables.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env-vars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env-vars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env_vars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env_vars.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env-configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env-configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env_configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 00.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 00.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 000.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 000.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:12:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 01.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:12:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 01.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 02.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 02.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1234.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1234.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4321.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4321.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12345.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12345.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123456.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123456.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 123.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 321.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 321.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test321.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test321.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testphp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xampp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lamp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lamp/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lamp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lamp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lamp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lamp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wamp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wamp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wamp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wamp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mamp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mamp/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mamp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mamp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-staging.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-staging.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info-local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-staging.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-staging.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo-local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug_env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug-environment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug-environment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug_environment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug_environment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev-env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod-env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod_env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local-env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local_env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging-env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging-env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging_env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test-env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test_env.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docker/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docker/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docker/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docker/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kubernetes/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kubernetes/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kubernetes/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kubernetes/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:14:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kubernetes/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL k8s/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:14:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL k8s/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:14:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL k8s/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:14:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL k8s/environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: k8s/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ___.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ___.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___environment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: console/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cli/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cli/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cli/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cli/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_environment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_environment.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:15:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:15:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wordpress was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wordpress was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL grandlimo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL grandlimo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wordpress was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wordpress was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL old was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL old was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL temp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 11:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL temp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 11:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 11:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 11:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 12:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 12:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 12:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 12:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 12:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 12:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 12:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 12:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 12:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 12:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 12:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 12:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 12:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 12:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 13:13:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 13:13:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 13:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 13:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:17:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-15 14:17:20 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-15 14:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: automation/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: automation/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/api_settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/api_settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/facebook_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/facebook_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/db.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/auth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/auth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/base.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/base.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/security.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/microsoft.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/microsoft.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/api/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/src/app/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/src/app/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/config/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: spec/config/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/api_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/api_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/external_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/external_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/azure_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/azure_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/oauth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/oauth_config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/oauth.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/oauth.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/provider_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/provider_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/twitter_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/twitter_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/dev/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/dev/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth_override.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/auth_override.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/integration_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/integration_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/auth_settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/prod/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environments/prod/settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/user/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/user/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/github.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/github.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config/test_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/config/test_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server_auth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security/keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/service_keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/service_keys.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/google.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/google.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/auth/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/auth/secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/app/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/app/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/token_store.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/token_store.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/secrets/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/okta_oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/okta_oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.d/oauth.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.d/oauth.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/integration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/integration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/client_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/client_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vault/oauth.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservices/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: microservices/oauth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/auth_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/auth_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/base.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp_oauth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings/auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/auth/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service_auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/auth/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 14:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/auth/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 14:32:35 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-15 14:32:35 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-15 15:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/" type="image/x-icon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 15:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/" type="image/x-icon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 15:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/admin/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 15:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/admin/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 16:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/static/admin/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 16:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/static/admin/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 16:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/client/update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-04-15 16:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/client/update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 16:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 16:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 17:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 17:58:49 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-04-15 17:58:49 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-04-15 18:29:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 18:29:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 19:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-worker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 19:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-worker.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 20:04:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 20:04:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 21:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activate was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 21:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activate was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 21:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 21:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 22:53:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-04-15 22:53:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-04-15 23:13:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-04-15 23:13:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-04-15 23:24:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 23:24:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-04-15 23:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-04-15 23:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}