<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-11-18 05:20:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 05:20:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 07:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-18 07:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-18 08:52:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-18 08:52:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-18 09:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 09:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 09:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 09:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-18 11:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-18 11:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL changelign was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL changelign was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL infestedterran was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL infestedterran was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL infestedterrna was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL infestedterrna was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swarmhost was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swarmhost was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swarmhots was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swarmhots was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL viper was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL viper was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL vipre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL vipre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lurker was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lurker was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lurkre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lurkre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ravager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ravager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ravagre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ravagre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dragoon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dragoon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dragono was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dragono was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reaver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reaver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reavre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reavre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scarab was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scarab was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scarba was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scarba was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL darkarchon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL darkarchon was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL darkarchno was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL darkarchno was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shuttle was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shuttle was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shuttel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shuttel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scotu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scotu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL interceptor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL interceptor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL interceptro was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL interceptro was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL arbiter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL arbiter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL arbitre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL arbitre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL corsair was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL corsair was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL corsari was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL corsari was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL firebat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL firebat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL firebta was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL firebta was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL medic was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL medic was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL medci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL medci was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL vulture was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL vulture was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL vultuer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL vultuer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL spidermine was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL spidermine was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL spidermien was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL spidermien was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goliath was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goliath was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goliaht was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goliaht was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wraith was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wraith was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wraiht was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wraiht was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dropship was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dropship was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dropshpi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dropshpi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sciencevessel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sciencevessel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sciencevessle was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sciencevessle was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL valkyrie was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL valkyrie was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL valkyrei was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL valkyrei was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL defiler was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL defiler was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL defilre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL defilre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scourge was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scourge was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scoureg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scoureg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guardian was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guardian was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guardina was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guardina was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL devourer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL devourer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 11:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL devourre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 11:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL devourre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 12:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-18 12:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-18 14:21:16 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-18 14:21:16 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-18 15:00:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-18 15:00:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-18 15:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 15:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 17:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 17:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 18:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-18 18:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-18 19:22:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 19:22:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 19:29:19 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-11-18 19:29:19 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-11-18 20:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 20:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 20:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 20:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 20:52:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-18 20:52:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-18 20:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/conf.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-18 20:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/conf.bin ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}