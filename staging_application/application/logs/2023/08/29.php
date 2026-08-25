<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-08-29 00:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 00:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 01:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 01:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 04:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 04:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 05:07:10 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-08-29 05:07:10 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-08-29 08:04:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 08:04:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 08:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 08:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 09:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 09:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL categories/Yud was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL categories/Yud was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nation.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nation.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL is-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL is-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL is-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL is-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL load was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL load was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 8.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hrsgdsb7386wknzms.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hrsgdsb7386wknzms.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UnityPlayer.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UnityPlayer.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ttd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ttd.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qd.CHM ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qd.CHM ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL zMLUH93A was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL zMLUH93A was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Display/chan/IB61I7MYA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Display/chan/IB61I7MYA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery-3.3.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gmail/UnityPlayer.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gmail/UnityPlayer.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL new/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL new/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL viwwwsogou was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL viwwwsogou was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e3e7e71a0b28b5e96cc492e636722f73/4sVKAOvu3D/BDyot0NxyG.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: e3e7e71a0b28b5e96cc492e636722f73/4sVKAOvu3D/BDyot0NxyG.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wh/glass.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wh/glass.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/msdownload/update/software/update/2021/11/6632de33-967441-x86.cab ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/msdownload/update/software/update/2021/11/6632de33-967441-x86.cab ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/msdownload/update/software/update/2021/11/6632de33-967441-x86.cab ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-08-29 10:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/msdownload/update/software/update/2021/11/6632de33-967441-x86.cab ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-08-29 10:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fw6I was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fw6I was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fw6I was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fw6I was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cM9s was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cM9s was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WWFh was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WWFh was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Visu/ens/events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Visu/ens/events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 10:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Visu/ens/events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 10:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Visu/ens/events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 14:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 14:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 14:08:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-08-29 14:08:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-08-29 15:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 15:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 17:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contract/public/details was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 17:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contract/public/details was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 17:51:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-08-29 17:51:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-08-29 19:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 19:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 19:30:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 19:30:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 19:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-08-29 19:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-08-29 20:25:47 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-08-29 20:25:47 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}