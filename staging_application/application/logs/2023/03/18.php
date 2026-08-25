<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2023-03-18 01:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-18 01:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-18 01:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-18 01:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-18 01:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-18 01:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-18 03:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-18 03:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-18 03:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/apps/v1/namespaces/kube-system/daemonsets ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 03:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/apps/v1/namespaces/kube-system/daemonsets ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 05:31:27 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-18 05:31:27 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-18 06:50:02 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-18 06:50:02 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-18 07:20:25 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-18 07:20:25 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-18 08:45:39 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-18 08:45:39 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-18 10:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOT_EXISTS_FILE.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOT_EXISTS_FILE.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oauth-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-application-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-application-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-application-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-application-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOT_EXISTS_FILE.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOT_EXISTS_FILE.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:19:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOT_EXISTS_FILE.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:19:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOT_EXISTS_FILE.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:19:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:19:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOT_EXISTS_FILE.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOT_EXISTS_FILE.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOT_EXISTS_FILE.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOT_EXISTS_FILE.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 10:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-18 10:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-18 10:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOT_EXISTS_FILE.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 10:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: NOT_EXISTS_FILE.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 11:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ENV/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 11:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ENV/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 11:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 11:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 11:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 11:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 13:24:26 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-18 13:24:26 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-18 15:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL explore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-18 15:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL explore was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-18 18:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-18 18:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-18 19:09:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-18 19:09:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL client/get_targets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-18 19:09:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 19:09:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 20:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2023-03-18 20:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2023-03-18 20:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-18 20:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-18 21:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2023-03-18 21:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/admin/formLogin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2023-03-18 21:40:15 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
2023-03-18 21:40:15 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 327 ]
--
#0 /var/www/html/application/classes/common_config.php(327): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 327, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2023-03-18 22:56:30 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2023-03-18 22:56:30 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}