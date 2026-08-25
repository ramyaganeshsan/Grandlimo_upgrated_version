<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-05-14 00:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 00:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 02:47:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 02:47:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 03:51:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-14 03:51:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-14 05:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL explore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 05:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL explore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 07:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 07:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 07:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 07:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 08:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: echo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:54 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-14 08:49:54 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-14 08:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 08:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1684043394 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 08:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 08:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1684043394 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 08:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:54 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-14 08:49:54 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-14 08:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL W4nc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 08:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL W4nc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 08:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 08:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 08:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 08:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 08:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 08:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 08:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 08:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 08:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 08:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 08:50:15 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-14 08:50:15 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-14 09:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 09:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 09:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 09:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 10:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 10:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 11:19:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-14 11:19:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-14 13:02:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-14 13:02:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-14 13:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 13:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 16:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 16:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 16:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 16:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 17:15:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL explore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 17:15:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL explore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 17:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 17:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 18:03:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-14 18:03:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-14 18:08:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 18:08:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 22:37:06 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-05-14 22:37:06 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-05-14 23:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 23:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-05-14 23:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-05-14 23:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-05-14 23:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-05-14 23:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}