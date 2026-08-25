<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-06-07 00:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 00:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 01:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/hui/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 01:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/hui/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 01:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 01:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 03:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 03:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 03:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 03:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 04:04:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-06-07 04:04:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-06-07 04:43:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-06-07 04:43:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-06-07 04:59:55 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-06-07 04:59:55 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-06-07 05:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/constants.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webroot/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL php_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL php_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-06-07 05:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings.dev.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/params.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/params.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: in.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: in.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:26:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:26:15 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2024-06-07 05:26:15 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manifest.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-uat.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-uat.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/services.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend_dev.php/$ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: customer/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/awsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/awsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/tsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info_p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: info_p.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/metrics/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/metrics/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awsconfig.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/aws-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: products/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_app/api/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my_app/api/config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/src/app/app.component.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/src/app/app.component.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/staging.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/staging.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings-production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings-production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuget.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nuget.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL infophp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/empty/search/results ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/empty/search/results ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myapp/admin.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myapp/admin.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/logging.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/logging.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-06-07 05:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:27:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:27:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 05:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: linusadmin-phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:05 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2024-06-07 05:27:05 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php-dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/aws_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-06-07 05:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 05:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/src/app/app.component.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/src/app/app.component.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecosystem.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/custom-environment-variables.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/custom-environment-variables.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/qa.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/qa.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/uat.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/uat.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/docker.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env/docker.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/local.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/production.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/staging.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/staging.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/test.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/test.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/dev.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/dev.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/qa.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/qa.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/uat.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/uat.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/docker.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/docker.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/custom.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/settings/custom.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/development.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/test.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/test.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/staging.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environments/staging.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puma.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/puma.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cable.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cable.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/devise.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/devise.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-test.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-test.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-staging.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-staging.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-local.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-qa.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-qa.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-uat.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-uat.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-docker.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-docker.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-custom.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/main/resources/application-custom.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cache.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/queue.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/queue.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/session.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/mail.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/filesystems.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/filesystems.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/servicex.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/servicex.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/broadcasting.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/broadcasting.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-prod.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-test.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-test.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-staging.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-local.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-qa.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-qa.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-uat.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-uat.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-docker.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-docker.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-custom.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config-custom.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/qa.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/qa.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/uat.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/uat.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/docker.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/docker.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/custom.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/custom.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/default.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/dev.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/prod.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/staging.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/local.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/qa.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/qa.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/uat.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/uat.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/docker.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/custom.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/custom.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.exs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.dev.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.dev.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.prod.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.prod.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.test.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.test.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.staging.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.staging.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.local.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.local.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.qa.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.qa.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.uat.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.uat.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.docker.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.docker.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.custom.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Rocket.custom.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-dev.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-dev.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-prod.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-prod.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-test.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-test.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-staging.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-staging.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-local.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-local.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-qa.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-qa.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-uat.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-uat.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-docker.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-docker.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-custom.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/application-custom.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.QA.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.QA.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.UAT.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.UAT.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Docker.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Docker.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Custom.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Custom.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.prod.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.prod.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.dev.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.dev.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.test.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.test.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.staging.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.staging.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.local.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.local.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.qa.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.qa.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.uat.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.uat.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.docker.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.docker.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.custom.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/environments/environment.custom.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/testing.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/testing.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/qa.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/qa.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/uat.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/uat.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/docker.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Config/docker.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_dev.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_dev.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_prod.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_prod.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_test.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_test.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_staging.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_staging.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_local.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_local.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_qa.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_qa.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_uat.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_uat.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_docker.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_docker.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_custom.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config_custom.R ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 05:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 05:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 06:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 06:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 06:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 06:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 08:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 08:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 08:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 08:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 08:38:50 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-06-07 08:38:50 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-06-07 08:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 08:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 09:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 09:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 09:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 09:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 09:44:51 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-06-07 09:44:51 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-06-07 11:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 11:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 11:24:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-06-07 11:24:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-06-07 11:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 11:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ReportServer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 11:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 11:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 13:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 13:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 13:32:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 13:32:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 13:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 13:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 14:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 14:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 14:07:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-06-07 14:07:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-06-07 14:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-06-07 14:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 14:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 14:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 14:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/Plugin/h-ui/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 14:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/Plugin/h-ui/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 15:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 15:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 16:36:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-06-07 16:36:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-06-07 17:12:56 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-06-07 17:12:56 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-06-07 17:15:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-06-07 17:15:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-06-07 19:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 19:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 19:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 19:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 19:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 19:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 19:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 19:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 19:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 19:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 19:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 19:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 19:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 19:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 19:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 19:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 19:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 19:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 21:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-06-07 21:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-06-07 22:09:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 22:09:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 22:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 22:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-06-07 23:12:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2024-06-07 23:12:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2024-06-07 23:37:36 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-06-07 23:37:36 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-06-07 23:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/empty/search/results was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-06-07 23:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/empty/search/results was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}