<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-06-24 00:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 00:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb/Pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 00:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/static/admin/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 00:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/static/admin/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 00:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/hui/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 00:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/hui/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 00:20:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 00:20:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 00:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 00:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 00:34:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-24 00:34:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-24 00:49:05 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-06-24 00:49:05 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-06-24 00:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 00:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 00:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 00:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 00:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 00:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 00:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 00:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 01:16:15 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-24 01:16:15 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-24 01:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 01:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 02:12:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 02:12:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 02:12:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 02:12:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 02:12:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 02:12:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 02:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 02:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 02:12:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 02:12:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 02:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 02:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 02:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 02:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 02:12:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 02:12:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 02:12:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 02:12:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 02:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 02:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 02:12:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 02:12:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 02:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 02:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 02:12:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 02:12:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 02:27:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 02:27:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 02:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/static/h-ui/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 02:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/static/h-ui/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 03:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 03:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 03:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 03:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 03:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 03:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 03:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 03:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 03:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 03:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 03:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 03:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 03:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 03:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 03:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 03:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 03:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 03:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 03:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 03:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 03:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 03:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 04:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 04:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 04:06:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 04:06:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 04:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/hui/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 04:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/hui/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 04:19:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 04:19:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 04:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 04:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 04:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 04:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 05:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 05:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 06:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 06:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 06:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 06:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 06:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 06:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 06:26:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 06:26:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 06:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 06:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 06:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 06:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 06:54:44 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-24 06:54:44 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-24 08:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 08:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 08:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 08:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 08:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 08:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 08:57:13 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-24 08:57:13 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-24 09:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 09:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 09:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 09:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 09:59:41 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-24 09:59:41 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-24 10:17:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 10:17:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 11:48:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-24 11:48:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-24 12:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL notifications/sendPushNotification was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 12:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL notifications/sendPushNotification was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 12:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 12:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 13:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 13:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpn_logon.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 13:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 13:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 13:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 13:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 13:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 13:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 14:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 14:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 14:15:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/admin/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 14:15:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/admin/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 14:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/js/plugins/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 14:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/js/plugins/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 14:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 14:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 14:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 14:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 14:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 14:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 14:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 14:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 14:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pscan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 14:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pscan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 14:50:27 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-06-24 14:50:27 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-06-24 14:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 14:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 14:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 14:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 14:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 14:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 15:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 15:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 15:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 15:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 15:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 15:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 15:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 15:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 15:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 15:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 17:16:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 17:16:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 17:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 17:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 17:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 17:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 18:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/hui/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 18:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/hui/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 19:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 19:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 19:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Admin/Tpl/public/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 19:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Admin/Tpl/public/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __MACOSX/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __MACOSX/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: a/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amphtml/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aomanalyzer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWSconf.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: AWSconf.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: build/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dot.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dot.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: flock/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: git/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: m/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old-cuburn/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repos/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repository/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samples/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wiki/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/js/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 21:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 21:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 21:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 21:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 21:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 21:19:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:19:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:19:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 21:19:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 21:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 21:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 21:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 21:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 21:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 21:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 21:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 21:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 21:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 21:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 21:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 21:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 21:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 21:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 21:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 21:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 21:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 21:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 22:36:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 22:36:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 22:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-06-24 22:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-06-24 22:54:38 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-24 22:54:38 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-24 23:18:27 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-06-24 23:18:27 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-06-24 23:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 23:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/lib/webuploader/0.1.5/server/fileupload.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-06-24 23:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-06-24 23:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}