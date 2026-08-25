<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-10-19 00:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 00:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 00:23:56 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-10-19 00:23:56 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-10-19 00:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 00:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 01:00:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-10-19 01:00:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-10-19 02:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL c was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 02:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL c was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 07:19:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/resources/h-ui/lib/webuploader/0.1.5/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 07:19:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/resources/h-ui/lib/webuploader/0.1.5/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 07:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/webupload/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 07:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/webupload/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 07:42:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-10-19 07:42:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-10-19 08:05:57 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-10-19 08:05:57 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-10-19 08:51:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/vendor/webupload/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 08:51:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/vendor/webupload/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 09:30:19 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-10-19 09:30:19 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-10-19 10:39:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-10-19 10:39:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-10-19 11:08:55 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-10-19 11:08:55 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Pk5l was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Pk5l was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1697702935 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1697702935 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 11:08:55 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-10-19 11:08:55 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 11:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 11:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 11:09:14 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-10-19 11:09:14 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-10-19 12:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: text/webuploader-0.1.5/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 12:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: text/webuploader-0.1.5/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 12:35:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webui/logoutconfirm.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 12:35:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webui/logoutconfirm.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 13:08:21 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-10-19 13:08:21 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-10-19 13:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 13:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 13:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 13:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 14:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 14:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 15:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 15:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 18:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 18:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 19:06:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 19:06:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 19:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 19:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 20:24:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 20:24:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 20:34:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 20:34:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 20:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/admin/admin_style/lib/webuploader/0.1.5/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 20:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/admin/admin_style/lib/webuploader/0.1.5/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 20:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 20:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 20:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web_shell_cmd.gch ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 20:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web_shell_cmd.gch ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 21:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 21:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 21:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 21:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 21:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 21:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 21:35:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 21:35:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 21:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 21:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 21:59:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-10-19 21:59:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-10-19 22:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 22:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 22:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-10-19 22:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-10-19 22:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/agent/lib/webuploader/0.1.5/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 22:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/agent/lib/webuploader/0.1.5/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-10-19 23:30:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-10-19 23:30:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-10-19 23:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/web/mysys/lib/webuploader/0.1.5/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-10-19 23:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/views/web/mysys/lib/webuploader/0.1.5/server/preview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}