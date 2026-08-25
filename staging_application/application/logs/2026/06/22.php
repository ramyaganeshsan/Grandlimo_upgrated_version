<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2026-06-22 01:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 01:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 01:43:55 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-22 01:43:55 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-22 01:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gw71400cr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 01:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gw71400cr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 01:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 01:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 02:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 02:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 02:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dg07n9ayav3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 02:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dg07n9ayav3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 03:20:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 03:20:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 03:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 03:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 05:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 05:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL * was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL * was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL */[id] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL */[id] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *update.cgi* ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *update.cgi* ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL */[slug] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL */[slug] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ADMIN/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ADMIN/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APP/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APP/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BackEnd/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BackEnd/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: DOCS.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: DOCS.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOTES.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOTES.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: [...catchAll] ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACK/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: [...catchAll] ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACK/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Be/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Be/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACKEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACKEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Docker.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Docker.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IAM.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IAM.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: LOG.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: LOG.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _layouts/15/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _layouts/15/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/about.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/about.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: [[...optional]] ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: [[...optional]] ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [id] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [id] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [locale]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [locale]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/index.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/index.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _next/static/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _next/static/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _react/action/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _react/action/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [slug] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [slug] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [tenant]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [tenant]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __nextjs_action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __nextjs_action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _api/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _api/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __nextjs_action/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __nextjs_action/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _layouts/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _layouts/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/*.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/*.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _vti_bin/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _vti_bin/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _waku/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _waku/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _react/data/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _react/data/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [workspace]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [workspace]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _vercel/insights was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _vercel/insights was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actions/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actions/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/auth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/auth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/team-provider-info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/team-provider-info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/data/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/data/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/serverless/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/serverless/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/executions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/executions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/webhook/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/webhook/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/users/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/users/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/workflows was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/workflows was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.terraform/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.terraform/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/amplify.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/amplify.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/next.config.mjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/next.config.mjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/nuxt.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/nuxt.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/amplify.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/amplify.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: attacker/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: attacker/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws-codecommit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws-codecommit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/bucket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/bucket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config/s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config/s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/s3/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/s3/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.QA.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.QA.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses/smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses/smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws_s3_bucket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws_s3_bucket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: be/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: be/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL chat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL chat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL checkout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL checkout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/stripe.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/stripe.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL billing/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL billing/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL chat/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL chat/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/nexmo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/nexmo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/module.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/module.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL controlpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL controlpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dnscfg.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dnscfg.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/overlay/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/overlay/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/registry/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/registry/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL content/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL content/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL elasticsearch_cluster_yml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL elasticsearch_cluster_yml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editor/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editor/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/apache2/apache2.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/apache2/apache2.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/boto.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/boto.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2026-06-22 06:02:17 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
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
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Error))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form-test/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form-test/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL healthz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL healthz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fr/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fr/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL integrations/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL integrations/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.netrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.netrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insta-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insta-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.gitconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.gitconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL loaders/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL loaders/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myproject/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myproject/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL oauth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL oauth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL oauth/authorize was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL oauth/authorize was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.git-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.git-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/mailcow-dockerized/mailcow.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/mailcow-dockerized/mailcow.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL messages/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL messages/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metrics was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metrics was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/*.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/*.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/download.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/download.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL media/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL media/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL old/aws_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL old/aws_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/perform.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/perform.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/refresh.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/refresh.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orders/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orders/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/update.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL notifications/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/update.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL notifications/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL package-updates/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL package-updates/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/apt.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/apt.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/install.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/install.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/save.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/save.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL package-updates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL package-updates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/yum.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/yum.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:20 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/paypal.php [ 34 ]
2026-06-22 06:02:20 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/paypal.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-06-22 06:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/payments/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/payments/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_gateways/stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_gateways/stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL posts/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL posts/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proc/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proc/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL projects/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL projects/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL publish/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL publish/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL products was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL products was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL profile/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL profile/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/credential-translation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/credential-translation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/credentials-for-node was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/credentials-for-node was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/executions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/executions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/license was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/license was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/oauth2-credential/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/oauth2-credential/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/variables was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/variables was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/workflows was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/workflows was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/oauth1-credential/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/oauth1-credential/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.boto ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.boto ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.s3cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.s3cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/tags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/tags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/workflows/run was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/workflows/run was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/node-types was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/node-types was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/bucket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/bucket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.git-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.git-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.gitconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.gitconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/bucket.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/bucket.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.netrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.netrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: servers/save.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: servers/save.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: servers/link.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: servers/link.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/environments.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/environments.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shop/[category]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shop/[category]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-06-22 06:02:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: software/*.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: software/*.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: software/install-updates.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: software/install-updates.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/FileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/FileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: software/update.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: software/update.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL symfony/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL symfony/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL threads/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL threads/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL trpc/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL trpc/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teams/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teams/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfvars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfvars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/amplify.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/amplify.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/amplify/backend/function/*/src/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/amplify/backend/function/*/src/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.mjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.mjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/nuxt.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/nuxt.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/amplify.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/amplify.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/nuxt.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/nuxt.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL waku/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL waku/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webhook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webhook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webhook-test/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webhook-test/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webhook-waiting/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webhook-waiting/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webhook/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webhook/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmin/package-updates/update.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmin/package-updates/update.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workspaces/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workspaces/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/incoming/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/incoming/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp_mail_smtp.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp_mail_smtp.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:07:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:07:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 4upvsvingi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 4upvsvingi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:26:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:26:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 06:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1ncdootey was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 06:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1ncdootey was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 06:47:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 06:47:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:02:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 07:02:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 07:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery3.3.1.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery3.3.1.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.fadethis.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.fadethis.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 07:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 07:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 07:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 07:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/smoothscroll.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/smoothscroll.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.prettyPhoto.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.prettyPhoto.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/wow.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/wow.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 07:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 07:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/bootstrap3.7.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/bootstrap3.7.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/viewportchecker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/viewportchecker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/swiper.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/bootstrap-timepicker.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/swiper.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/bootstrap-timepicker.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.isotope.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.isotope.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.lightbox_me.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.lightbox_me.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/validation/jquery.validate.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/validation/jquery.validate.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/simpledatetimepicker/jquery.simple-dtpicker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/simpledatetimepicker/jquery.simple-dtpicker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/timepicker/jquery.timepicker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/timepicker/jquery.timepicker.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.selectbox-0.2.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.selectbox-0.2.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/datepicker/jquery-ui.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/datepicker/jquery-ui.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/how_it_works.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: driver/pricing.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 07:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 07:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: passengers/www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:20:15 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-22 08:20:15 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-22 08:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 08:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 08:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 09:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL onvif/device_service was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 09:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL onvif/device_service was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 09:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 09:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 09:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 09:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 09:04:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 09:04:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 09:12:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 09:12:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 09:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 09:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 09:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 09:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 09:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 09:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 09:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 09:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ajax.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 09:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mbilling was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 09:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mbilling was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 10:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 10:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 10:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 10:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 11:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 11:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 11:10:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:10:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:10:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:10:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/public/js/jquery.prettyPhoto.js" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: "/public/js/jquery.prettyPhoto.js" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 11:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 11:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.save ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 11:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 11:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 11:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 11:27:09 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-06-22 11:27:09 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-06-22 11:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 11:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 12:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 12:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 12:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 12:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 12:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 12:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 13:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 13:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 14:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 14:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 14:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 14:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 14:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 14:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 14:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 14:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 14:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 14:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 14:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 14:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 14:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 14:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 14:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 14:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 15:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 15:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 16:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 16:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 16:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/custom.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 16:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/custom.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 16:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 16:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 16:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 16:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 17:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL healthz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 17:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL healthz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 17:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL healthz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 17:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL healthz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 17:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 17:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 17:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 17:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 17:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 17:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 17:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 17:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 17:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 17:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 17:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 17:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_cpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_cpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2026-06-22 18:04:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-22 18:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:04:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:04:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:04:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:04:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL * was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL * was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL */[id] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL */[id] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL */[slug] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL */[slug] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *update.cgi* ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: *update.cgi* ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ADMIN/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ADMIN/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BE/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BackEnd/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BackEnd/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Be/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Be/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Docker.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Docker.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IAM.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: IAM.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: README.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [slug] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [slug] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACKEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACKEND/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [id] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [id] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [locale]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [locale]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APP/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: APP/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACK/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: BACK/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [workspace]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [workspace]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: DOCS.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: DOCS.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: LOG.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: LOG.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOTES.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOTES.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: [...catchAll] ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: [...catchAll] ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _layouts/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _layouts/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL [tenant]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __nextjs_action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL [tenant]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __nextjs_action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __nextjs_action/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __nextjs_action/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _api/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _api/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: [[...optional]] ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: [[...optional]] ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _layouts/15/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _layouts/15/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _next/static/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _next/static/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/index.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/index.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _profiler/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _vti_bin/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _vti_bin/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _react/data/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _react/data/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _react/action/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _react/action/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _vercel/insights was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _vercel/insights was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/*.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/*.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _waku/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _waku/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/about.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _next/data/*/about.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actions/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actions/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config/database.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/team-provider-info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: amplify/team-provider-info.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/auth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/auth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/data/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/data/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/executions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/executions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/node/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/serverless/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/serverless/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/workflows was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/workflows was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/users/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/users/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/webhook/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/webhook/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.terraform/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.terraform/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/amplify.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/amplify.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/amplify.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/amplify.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/development.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/nuxt.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/nuxt.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/next.config.mjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/next.config.mjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Local.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: attacker/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: attacker/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.QA.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.QA.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml.dist ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-ses.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws-codecommit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws-codecommit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/bucket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/bucket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config/s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/config/s3.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/s3/env.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses/smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws/ses/smtp.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/s3/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/s3/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_s3_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws_s3_bucket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws_s3_bucket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back-end/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/node/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: be/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: be/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beta/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL billing/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL billing/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cart was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL chat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL chat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL chat/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL chat/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL checkout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL checkout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/stripe.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/stripe.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: circle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.prod.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/nexmo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/nexmo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/module.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/module.config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/test.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/utils.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL content/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL content/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: constants.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.csv ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.go ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/stripe.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL controlpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL controlpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: current/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deploy.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cron/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dnscfg.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dnscfg.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/registry/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/registry/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editor/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editor/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/overlay/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/overlay/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elasticsearch.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL elasticsearch_cluster_yml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL elasticsearch_cluster_yml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: erp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/apache2/apache2.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/apache2/apache2.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/boto.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/boto.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form-test/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form-test/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fr/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fr/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:36 --- ERROR: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
2026-06-22 18:36:36 --- STRACE: ErrorException [ 8 ]: Undefined index: user_type ~ APPPATH/views/admin/header_inner.php [ 8 ]
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
#9 /var/www/html/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Error))
#10 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/index.php(115): Kohana_Request->execute()
#13 {main}
2026-06-22 18:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: front/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.netrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.netrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.gitconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.gitconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL loaders/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL loaders/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL media/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL media/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL healthz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL healthz was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.git-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/*/.git-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL messages/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL messages/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myproject/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myproject/settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: new/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL integrations/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL integrations/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: marketing/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metrics was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metrics was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insta-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: insta-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: infophp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL notifications/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL notifications/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeweb/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nodeapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL oauth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL oauth/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL oauth/authorize was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL oauth/authorize was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL old/aws_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL old/aws_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/mailcow-dockerized/mailcow.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/mailcow-dockerized/mailcow.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orders/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orders/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/*.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/*.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL package-updates/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL package-updates/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/download.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/download.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opt/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/save.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/save.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/yum.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/yum.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/apt.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/apt.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/install.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/install.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/refresh.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/perform.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/refresh.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/perform.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/update.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-updates/update.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL package-updates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL package-updates was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/paypal.php [ 34 ]
2026-06-22 18:36:40 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/model/paypal.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_gateways/stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment_gateways/stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: portal/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/payments/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/payments/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL products was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL products was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL profile/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL profile/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL posts/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL posts/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL publish/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL publish/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qa/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proc/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proc/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.md ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public-api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/credential-translation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/credential-translation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: product/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/executions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/executions was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/oauth1-credential/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/oauth1-credential/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/node-types was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/node-types was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/oauth2-credential/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/oauth2-credential/auth was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/tags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/tags was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL projects/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL projects/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/credentials-for-node was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/credentials-for-node was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/workflows was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/workflows was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.aws/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.netrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.netrc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/variables was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/variables was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.s3cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.s3cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.key ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/workflows/run was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/workflows/run was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.boto ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.boto ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.git-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.git-credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/backup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.gitconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.gitconfig ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sam-template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.aws/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL s3/bucket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL s3/bucket was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/license was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/license was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.secret ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/bucket.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/bucket.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: servers/link.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: servers/link.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: servers/save.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: servers/save.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sendgrid.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shop/[category]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shop/[category]/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: software/install-updates.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: software/install-updates.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-06-22 18:36:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/environments.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: services/environments.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/FileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/FileUpload.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: software/update.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: software/update.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/stripe.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: software/*.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: software/*.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: srv/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/config/stripe.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stg/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teams/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teams/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe-keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/config/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfvars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform/terraform.tfvars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL symfony/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL symfony/_profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sysinfo.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL threads/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL threads/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/amplify.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/amplify.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/amplify.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/amplify.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/amplify/backend/function/*/src/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/amplify/backend/function/*/src/index.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL trpc/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL trpc/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/netlify.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.mjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.mjs ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/next.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/www/html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/nuxt.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/nuxt.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/nuxt.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/nuxt.config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/serverless.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: var/task/vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/common.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/config/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL waku/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL waku/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webhook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webhook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webhook-test/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webhook-test/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/incoming/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webhooks/incoming/stripe.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constants.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmin/package-updates/update.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webmin/package-updates/update.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workspaces/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workspaces/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webhook-waiting/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webhook-waiting/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/wp/v2/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webhook/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webhook/* was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/constant.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp_mail_smtp.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp_mail_smtp.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.new ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/mysql.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/gravitysmtp/v1/tests/mock-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 18:37:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:37:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 18:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 18:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jd3jo0p4_m9eud4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 18:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jd3jo0p4_m9eud4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 19:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 19:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 19:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 19:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 19:27:11 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-22 19:27:11 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-22 19:34:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 19:34:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 20:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 20:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 20:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 20:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 20:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 20:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 20:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 20:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:07:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:07:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_cpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_cpanel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:18:49 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2026-06-22 21:18:49 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-22 21:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 21:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 21:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:18:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:18:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:18:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:18:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 21:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 21:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 21:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 21:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 22:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 22:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 22:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 22:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 22:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-22 22:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 22:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.prettyPhoto.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.prettyPhoto.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 22:09:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 22:09:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.q8grandlimo.com ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 23:22:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-22 23:22:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-22 23:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-22 23:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-22 23:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL chvxwtbcm2octuavv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 23:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL chvxwtbcm2octuavv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-22 23:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-22 23:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}