<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-08-20 00:47:29 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-08-20 00:47:29 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-08-20 00:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 00:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 01:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 01:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 04:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 04:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 04:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 04:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 04:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 04:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 04:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 04:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 04:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 04:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 04:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 04:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 04:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 04:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 04:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 04:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 04:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 04:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 09:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 09:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 10:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 10:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 10:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 10:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 10:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 10:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:04:22 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-08-20 13:04:22 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-08-20 13:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nation.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nation.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL is-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL is-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL is-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL is-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL load was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL load was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hrsgdsb7386wknzms.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hrsgdsb7386wknzms.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UnityPlayer.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UnityPlayer.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ttd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ttd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qd.CHM ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qd.CHM ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hrsgdsb7386wknzms.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hrsgdsb7386wknzms.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UnityPlayer.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UnityPlayer.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ttd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ttd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qd.CHM ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qd.CHM ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hrsgdsb7386wknzms.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hrsgdsb7386wknzms.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UnityPlayer.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UnityPlayer.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ttd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ttd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qd.CHM ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qd.CHM ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hrsgdsb7386wknzms.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hrsgdsb7386wknzms.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UnityPlayer.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UnityPlayer.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ttd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ttd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qd.CHM ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qd.CHM ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hrsgdsb7386wknzms.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hrsgdsb7386wknzms.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UnityPlayer.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UnityPlayer.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ttd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ttd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qd.CHM ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qd.CHM ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL zMLUH93A was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL zMLUH93A was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Display/chan/IB61I7MYA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Display/chan/IB61I7MYA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gmail/UnityPlayer.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gmail/UnityPlayer.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL new/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL new/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL viwwwsogou was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL viwwwsogou was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e3e7e71a0b28b5e96cc492e636722f73/4sVKAOvu3D/BDyot0NxyG.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e3e7e71a0b28b5e96cc492e636722f73/4sVKAOvu3D/BDyot0NxyG.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wh/glass.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wh/glass.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/msdownload/update/software/update/2021/11/6632de33-967441-x86.cab ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/msdownload/update/software/update/2021/11/6632de33-967441-x86.cab ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/msdownload/update/software/update/2021/11/6632de33-967441-x86.cab ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/msdownload/update/software/update/2021/11/6632de33-967441-x86.cab ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 13:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fw6I was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fw6I was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fw6I was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fw6I was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL MSIs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL MSIs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL h3Wj was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL h3Wj was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Visu/ens/events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Visu/ens/events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Visu/ens/events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Visu/ens/events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 13:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 13:28:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 13:28:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 14:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 14:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 14:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 14:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 14:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 14:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 14:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 14:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 14:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 14:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 14:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 14:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 14:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 14:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 14:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 14:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 14:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 14:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 16:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 16:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 17:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-20 17:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-20 23:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 23:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-20 23:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-20 23:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}