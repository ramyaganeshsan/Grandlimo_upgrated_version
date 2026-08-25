<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-03-17 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 02:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 02:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 03:00:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-17 03:00:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-17 03:20:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-17 03:20:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-17 04:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 04:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 06:51:38 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-17 06:51:38 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-17 07:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 07:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 07:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 07:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 07:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 07:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 08:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 08:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 08:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 08:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 08:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 08:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 09:03:23 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-17 09:03:23 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-17 13:10:13 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-17 13:10:13 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-17 13:21:48 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-17 13:21:48 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-17 14:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 14:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 14:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 14:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 20:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 20:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 20:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 20:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 20:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 20:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:15 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-17 21:03:15 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-17 21:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1679076195 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 21:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1679076195 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 21:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 21:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 21:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gl2W was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 21:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gl2W was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 21:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 21:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 21:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 21:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 21:03:16 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-17 21:03:16 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-17 21:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 21:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 21:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 21:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-17 21:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 21:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 21:03:32 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-17 21:03:32 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-17 22:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-17 22:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-17 22:17:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-17 22:17:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}