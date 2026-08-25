<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2024-01-31 00:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 00:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 00:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 00:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 00:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 00:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 00:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth1.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 00:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth1.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 00:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpnLogin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 00:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sslvpnLogin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 00:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/tfa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 00:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/tfa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 00:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 00:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/sonicos/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 01:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 01:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 01:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 01:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 01:38:43 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-01-31 01:38:43 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-01-31 02:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v0/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 02:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v0/id was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 06:58:44 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-01-31 06:58:44 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-01-31 07:10:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 07:10:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 07:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 07:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 07:31:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/model/manage.php [ 14776 ]
2024-01-31 07:31:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/model/manage.php [ 14776 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 07:40:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/model/manage.php [ 14777 ]
2024-01-31 07:40:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/model/manage.php [ 14777 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 07:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 07:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 07:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 07:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 07:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 07:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 07:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 07:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 07:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 07:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 07:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 07:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:09:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:09:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:15:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:15:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:15:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:15:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:15:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:15:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:16:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:16:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:17:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:17:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/get_trip_info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:17:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:17:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:17:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:17:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2024-01-31 08:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL share/action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:22:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:22:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:23:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:23:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:23:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:23:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:24:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:24:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:24:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:24:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:27:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:27:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL action_get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:28:11 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:28:11 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:28:18 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:28:18 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:28:26 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:28:26 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:28:32 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:28:32 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:28:40 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:28:40 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:28:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:28:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:28:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:28:46 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:28:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:28:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:28:57 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:28:57 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:29:04 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:29:04 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:29:11 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:29:11 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:29:18 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:29:18 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:29:25 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:29:25 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:29:32 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:29:32 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:29:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:29:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:29:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:29:46 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:30:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:30:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:30:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:30:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:30:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:30:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL get_location was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:31:10 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:31:10 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:31:17 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:31:17 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:31:25 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:31:25 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:31:32 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:31:32 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:31:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:31:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:31:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:31:46 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:31:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:31:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:32:00 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:32:00 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:32:07 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:32:07 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:32:14 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:32:14 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:32:21 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:32:21 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:32:28 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:32:28 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:32:35 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:32:35 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:32:42 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:32:42 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:32:49 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:32:49 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:33:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:33:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL c was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL c was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:33:38 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:33:38 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:33:40 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:33:40 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:33:47 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:33:47 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:33:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:33:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:34:02 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:34:02 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:34:08 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:34:08 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:34:16 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:34:16 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:34:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:34:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:34:30 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:34:30 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:34:37 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:34:37 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:34:44 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:34:44 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:34:51 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:34:51 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:34:58 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:34:58 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:35:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:35:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:35:12 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:35:12 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:35:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:35:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:36:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:36:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:37:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:37:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:38:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:38:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 08:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 08:39:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:39:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:40:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
2024-01-31 08:40:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _id - assumed '_id' ~ APPPATH/classes/model/manage.php [ 14780 ]
--
#0 /var/www/html/application/classes/model/manage.php(14780): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/a...', 14780, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:41:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:41:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:41:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:41:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:41:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:41:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:41:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:41:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:41:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:41:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:41:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:41:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:41:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:41:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:41:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:41:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:42:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:42:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:42:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:42:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:42:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:42:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:42:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:42:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:42:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:42:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:42:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:42:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:42:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:42:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:42:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:42:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:42:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:42:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:43:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:43:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:43:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:43:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:43:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:43:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:43:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:43:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:43:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:43:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:43:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:43:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:43:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:43:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:43:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:43:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:43:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:43:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:44:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:44:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:44:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:44:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:44:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:44:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:44:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:44:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:44:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:44:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:44:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:44:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:44:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:44:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:44:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:44:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:44:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:44:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:45:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:45:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:45:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:45:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:45:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:45:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:45:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:45:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:45:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:45:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::where() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:45:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:45:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:45:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:45:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:45:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:45:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:46:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:46:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:46:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:46:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:46:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:46:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:46:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:46:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:46:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:46:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:46:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:46:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:46:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:46:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:46:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:46:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:46:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:46:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:47:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:47:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:47:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:47:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:47:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:47:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:47:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
2024-01-31 08:47:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: _id ~ APPPATH/classes/model/manage.php [ 14781 ]
--
#0 /var/www/html/application/classes/model/manage.php(14781): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 14781, Array)
#1 /var/www/html/application/classes/controller/share.php(45): Model_Manage->getDriverCurrentLocation('')
#2 [internal function]: Controller_Share->action_get_location()
#3 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#4 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(115): Kohana_Request->execute()
#7 {main}
2024-01-31 08:47:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/model/manage.php [ 1727 ]
2024-01-31 08:47:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/model/manage.php [ 1727 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:47:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:47:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:47:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:47:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:47:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:47:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:47:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:47:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:48:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:48:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:48:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:48:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:48:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:48:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:48:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:48:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:48:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:48:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:48:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:48:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:48:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
2024-01-31 08:48:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::findOne() ~ APPPATH/classes/model/manage.php [ 14783 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:48:54 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:48:54 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:49:01 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:49:01 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:49:02 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:49:02 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:49:09 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:49:09 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:49:16 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:49:16 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:49:23 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:49:23 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:49:30 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:49:30 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:49:37 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:49:37 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:49:44 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:49:44 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:49:51 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:49:51 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:49:58 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:49:58 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:50:05 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:50:05 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:50:12 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:50:12 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:50:19 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:50:19 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:50:26 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:50:26 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:50:33 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:50:33 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:50:40 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:50:40 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:50:47 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:50:47 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:50:54 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:50:54 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:51:01 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:51:01 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:51:08 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:51:08 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:51:15 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:51:15 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:51:22 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:51:22 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:51:29 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:51:29 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:51:36 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:51:36 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:51:43 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:51:43 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:51:50 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:51:50 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:51:57 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:51:57 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:52:04 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:52:04 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:52:11 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:52:11 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:52:18 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:52:18 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:52:25 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:52:25 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:52:32 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:52:32 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:52:39 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:52:39 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:52:46 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:52:46 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:52:53 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:52:53 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:53:01 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:53:01 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:53:02 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:53:02 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:53:09 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:53:09 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:53:16 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:53:16 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:53:23 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:53:23 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:53:30 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:53:30 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:53:37 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:53:37 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:53:44 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:53:44 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:53:51 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:53:51 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:53:58 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:53:58 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:54:05 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:54:05 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:54:12 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:54:12 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:54:19 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:54:19 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:54:26 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:54:26 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:54:33 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:54:33 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:54:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/model/manage.php [ 1727 ]
2024-01-31 08:54:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/model/manage.php [ 1727 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2024-01-31 08:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:54:46 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:54:46 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:54:53 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:54:53 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:55:00 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:55:00 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:55:07 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:55:07 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:55:14 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:55:14 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:55:21 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:55:21 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:55:29 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:55:29 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:55:35 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:55:35 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:55:43 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:55:43 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:55:49 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:55:49 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:55:57 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:55:57 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:56:03 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:56:03 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:56:10 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:56:10 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:56:17 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:56:17 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:56:24 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:56:24 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:56:31 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:56:31 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:56:38 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:56:38 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:56:45 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:56:45 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:56:52 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:56:52 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:56:59 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:56:59 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:57:06 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:57:06 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:57:13 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:57:13 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:57:20 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:57:20 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:57:27 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:57:27 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 08:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 08:57:33 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:57:33 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:57:40 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:57:40 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:57:47 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:57:47 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:57:54 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:57:54 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:58:01 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:58:01 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:58:08 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:58:08 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:58:15 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:58:15 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:58:22 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:58:22 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:58:29 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:58:29 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:58:36 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:58:36 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:58:43 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:58:43 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:58:50 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:58:50 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:58:57 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:58:57 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:59:04 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:59:04 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:59:11 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:59:11 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:59:18 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:59:18 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:59:25 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:59:25 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:59:32 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:59:32 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:59:39 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:59:39 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:59:46 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:59:46 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 08:59:53 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 08:59:53 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:00:00 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:00:00 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:00:07 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:00:07 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:00:14 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:00:14 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:00:21 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:00:21 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:00:28 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:00:28 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:00:35 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:00:35 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:00:42 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:00:42 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:00:49 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:00:49 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:00:56 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:00:56 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:01:03 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:01:03 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:01:10 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:01:10 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:01:17 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:01:17 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:01:24 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:01:24 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:01:31 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:01:31 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:01:38 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:01:38 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:01:45 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:01:45 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:01:52 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:01:52 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:01:59 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:01:59 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:02:06 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:02:06 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 09:02:10 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:02:10 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:02:17 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:02:17 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:02:24 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:02:24 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:02:31 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:02:31 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:02:38 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:02:38 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:02:45 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:02:45 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:02:52 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:02:52 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:02:59 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:02:59 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:03:06 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:03:06 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:03:13 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:03:13 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:03:20 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:03:20 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:03:27 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:03:27 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:03:34 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:03:34 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:03:41 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:03:41 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:03:48 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:03:48 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:03:55 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:03:55 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:04:02 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:04:02 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:04:09 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:04:09 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:04:16 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:04:16 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:04:23 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:04:23 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:04:30 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:04:30 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:04:37 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:04:37 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:04:44 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:04:44 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:04:51 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:04:51 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:04:58 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:04:58 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:05:05 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:05:05 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:05:12 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:05:12 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:05:19 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:05:19 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:05:26 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:05:26 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:05:33 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:05:33 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:05:40 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:05:40 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:05:47 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:05:47 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:05:54 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:05:54 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:06:01 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:06:01 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:06:08 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:06:08 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:06:15 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:06:15 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:06:22 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:06:22 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:06:29 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:06:29 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 09:06:33 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:06:33 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:06:40 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:06:40 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:06:47 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:06:47 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:06:54 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:06:54 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:07:01 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:07:01 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:07:08 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:07:08 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 09:07:09 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:07:09 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:07:16 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:07:16 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:07:24 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:07:24 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:07:30 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:07:30 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:07:38 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:07:38 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:07:44 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:07:44 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:07:52 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:07:52 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:07:58 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:07:58 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:08:06 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:08:06 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:08:13 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:08:13 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:08:19 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:08:19 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:08:27 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:08:27 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:08:33 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:08:33 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:08:41 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:08:41 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:08:47 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:08:47 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:08:55 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:08:55 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:09:01 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:09:01 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:09:09 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:09:09 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:09:15 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:09:15 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:09:23 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:09:23 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:09:29 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:09:29 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:09:37 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:09:37 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:09:43 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:09:43 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:09:51 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:09:51 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:09:57 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:09:57 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:10:05 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:10:05 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:10:11 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:10:11 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:10:19 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:10:19 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:10:25 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:10:25 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:10:33 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:10:33 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:10:39 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:10:39 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:10:47 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:10:47 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 09:10:53 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:10:53 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:11:01 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:11:01 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:11:07 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:11:07 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:11:15 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:11:15 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:11:19 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:11:19 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:11:22 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:11:22 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:11:29 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:11:29 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:11:36 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:11:36 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:11:43 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:11:43 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:11:50 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:11:50 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:11:57 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:11:57 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:12:04 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:12:04 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:12:11 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:12:11 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:12:18 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:12:18 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:13:23 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:13:23 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:14:23 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:14:23 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:15:23 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2024-01-31 09:15:23 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
--
#0 /var/www/html/application/views/admin/header_inner.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 8, Array)
#1 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#2 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#3 /var/www/html/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/html/application/views/admin/template.php(76): Kohana_View->__toString()
#5 /var/www/html/system/classes/kohana/view.php(61): include('/var/www/html/a...')
#6 /var/www/html/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/html/a...', Array)
#7 /var/www/html/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Share))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2024-01-31 09:18:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: details ~ APPPATH/classes/controller/share.php [ 47 ]
2024-01-31 09:18:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: details ~ APPPATH/classes/controller/share.php [ 47 ]
--
#0 /var/www/html/application/classes/controller/share.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 47, Array)
#1 [internal function]: Controller_Share->action_get_location()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2024-01-31 09:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 09:21:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:21:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 09:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 09:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 09:26:30 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-01-31 09:26:30 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-01-31 09:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 09:29:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:29:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 09:30:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:30:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 09:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 09:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 09:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 09:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 09:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 10:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 10:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:12:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 10:12:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 10:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 10:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 10:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 10:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 10:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 10:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 10:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 10:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 10:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 10:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 10:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 11:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 11:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 11:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 11:32:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
2024-01-31 11:32:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
--
#0 /var/www/html/application/classes/controller/share.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 [internal function]: Controller_Share->action_get_location()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2024-01-31 11:32:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
2024-01-31 11:32:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
--
#0 /var/www/html/application/classes/controller/share.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 [internal function]: Controller_Share->action_get_location()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2024-01-31 11:32:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
2024-01-31 11:32:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
--
#0 /var/www/html/application/classes/controller/share.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 [internal function]: Controller_Share->action_get_location()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2024-01-31 11:32:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
2024-01-31 11:32:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
--
#0 /var/www/html/application/classes/controller/share.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 [internal function]: Controller_Share->action_get_location()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2024-01-31 11:32:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
2024-01-31 11:32:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
--
#0 /var/www/html/application/classes/controller/share.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 [internal function]: Controller_Share->action_get_location()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2024-01-31 11:32:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
2024-01-31 11:32:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
--
#0 /var/www/html/application/classes/controller/share.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 [internal function]: Controller_Share->action_get_location()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2024-01-31 11:33:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
2024-01-31 11:33:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: trip_id ~ APPPATH/classes/controller/share.php [ 42 ]
--
#0 /var/www/html/application/classes/controller/share.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 42, Array)
#1 [internal function]: Controller_Share->action_get_location()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Share))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2024-01-31 11:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 11:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 11:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 11:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 11:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 11:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 11:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 11:35:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:35:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 11:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 11:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 11:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 12:17:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 12:17:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 12:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 12:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 12:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 12:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 12:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 12:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 12:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 12:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 12:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 12:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 12:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 12:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 12:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 12:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 12:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 12:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/admin/css/easy-autocomplete.min.css.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 12:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 12:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 13:07:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 13:07:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 14:09:30 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-01-31 14:09:30 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2024-01-31 14:13:32 --- ERROR: View_Exception [ 0 ]: The requested view admin/managerating_drivers_all could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2024-01-31 14:13:32 --- STRACE: View_Exception [ 0 ]: The requested view admin/managerating_drivers_all could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/html/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/managerat...')
#1 /var/www/html/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/managerat...', NULL)
#2 /var/www/html/application/classes/controller/manage.php(9794): Kohana_View::factory('admin/managerat...')
#3 [internal function]: Controller_Manage->action_trips_ratings_drivers()
#4 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Manage))
#5 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(115): Kohana_Request->execute()
#8 {main}
2024-01-31 15:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2024-01-31 15:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2024-01-31 15:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 15:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 19:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 19:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 19:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 19:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 21:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 21:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 23:06:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2024-01-31 23:06:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2024-01-31 23:28:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2024-01-31 23:28:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}