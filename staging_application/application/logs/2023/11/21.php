<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-11-21 02:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 02:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 03:24:38 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-21 03:24:38 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-21 06:09:57 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-11-21 06:09:57 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-11-21 07:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 07:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 10:04:48 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-21 10:04:48 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-21 10:18:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-11-21 10:18:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-11-21 10:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Temporary_Listen_Addresses was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 10:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Temporary_Listen_Addresses was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 10:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Pages/log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 10:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Pages/log was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 10:56:08 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-11-21 10:56:08 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-11-21 11:26:17 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:26:17 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:26:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:26:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:27:01 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:27:01 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:27:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:27:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:28:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:28:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:29:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:29:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:29:57 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:29:57 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:30:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:30:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:31:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:31:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:32:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:32:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:33:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:33:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:34:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:34:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:35:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:35:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:36:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:36:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:37:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:37:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:38:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:38:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:39:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:39:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:40:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:40:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:41:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:41:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:42:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:42:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:43:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:43:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:44:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:44:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:45:22 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:45:22 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:45:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:45:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:46:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:46:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:47:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:47:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:48:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:48:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:49:37 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:49:37 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:49:38 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:49:38 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:49:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:49:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:50:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:50:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:51:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:51:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:52:43 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:52:43 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:52:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:52:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:53:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:53:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:54:14 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:54:14 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:54:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:54:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:55:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:55:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:56:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:56:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:57:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:57:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:58:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:58:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 11:59:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 11:59:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:00:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:00:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:01:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:01:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:02:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:02:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:03:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:03:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:04:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:04:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:05:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:05:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:06:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:06:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:07:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:07:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:08:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:08:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:09:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:09:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:10:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:10:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:11:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:11:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:12:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:12:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:13:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:13:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:14:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:14:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:15:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:15:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:16:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:16:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:17:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:17:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:18:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:18:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:19:56 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:19:56 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:20:55 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:20:55 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:21:05 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:21:05 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:21:05 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:21:05 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:21:10 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:21:10 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:21:10 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:21:10 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:21:17 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:21:17 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:21:18 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:21:18 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:21:19 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:21:19 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:21:34 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:21:34 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:21:42 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:21:42 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:21:43 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:21:43 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:21:45 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:21:45 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:21:45 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:21:45 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:22:10 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:22:10 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:22:10 --- ERROR: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
2023-11-21 12:22:10 --- STRACE: ErrorException [ 2 ]: Constants may only evaluate to scalar values ~ APPPATH/classes/common_config.php [ 246 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Constants may o...', '/var/www/html/a...', 246, Array)
#1 /var/www/html/application/classes/common_config.php(246): define('ADMIN_COMMISSON', Array)
#2 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#3 /var/www/html/index.php(107): require('/var/www/html/a...')
#4 {main}
2023-11-21 12:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 12:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/uploads/favicon/fav_demo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 14:16:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Temporary_Listen_Addresses was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 14:16:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Temporary_Listen_Addresses was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 14:24:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-21 14:24:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-21 15:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 15:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 15:53:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 15:53:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 19:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 19:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 21:37:06 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-21 21:37:06 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-21 21:37:06 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-21 21:37:06 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-21 21:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1700591826 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 21:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1700591826 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 21:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL BOtW was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 21:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL BOtW was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 21:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 21:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 21:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 21:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 21:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 21:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 21:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 21:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 21:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 21:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 21:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 21:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 21:37:17 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-21 21:37:17 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-21 22:24:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 22:24:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 22:45:53 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-11-21 22:45:53 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-11-21 22:57:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2023-11-21 22:57:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2023-11-21 23:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WuEL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 23:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WuEL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 23:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 23:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 23:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file.ext ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-11-21 23:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: download/file.ext ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-11-21 23:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SiteLoader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 23:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SiteLoader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 23:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mPlayer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 23:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mPlayer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-11-21 23:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-11-21 23:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hudson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}