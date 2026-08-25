<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2026-06-07 00:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 00:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 00:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 00:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 00:17:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 00:17:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 00:59:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 00:59:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 01:00:53 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 01:00:53 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 01:01:33 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 01:01:33 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 01:02:07 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 01:02:07 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 01:02:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 01:02:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 01:03:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 01:03:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 02:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 02:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 02:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 02:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 03:08:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 03:08:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 04:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 04:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 05:08:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 05:08:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 05:17:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL eventmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 05:17:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL eventmanager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 05:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 05:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 05:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 05:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 05:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 7omurafgnjedg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 05:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 7omurafgnjedg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 05:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL onvif/device_service was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 05:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL onvif/device_service was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 05:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 05:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application_default_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application_default_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-private-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-private-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application_default_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application_default_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service_account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service_account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcloud-service-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcloud-service-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-private-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-private-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-application-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-application-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 07:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 07:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 07:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 08:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 08:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 09:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 09:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pro/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pro/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1board/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1board/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extlib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extlib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: host.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: live/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: back/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL backup/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL backup/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: develop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: __phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpversion.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: my/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payment/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: panel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: export/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: payments/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pms/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab-ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab-ci/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gitlab/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: processor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/bucket.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/bucket.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shared/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitestatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitestatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stockapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stockapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflows/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflows/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v3/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php/phpinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/bucket.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/bucket.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sandbox/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sessions/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemaps/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v2/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3/.env.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: store/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sources/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stats/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: site-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: support/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shop/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static-html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitestatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitestatic/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reports/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stripe/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stockapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stockapi/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: root/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static_prod/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: proc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: repo/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tools/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:19:13 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 10:19:13 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 10:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.prod ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-07 10:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/both was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/both was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/keydown was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/keydown was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL react was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL react was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL beta was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL beta was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2026-06-07 10:30:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2026-06-07 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudbuild.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudbuild.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/chunks was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/chunks was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/script was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/script was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dist/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dist/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/Bottom was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/Bottom was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/nextSibling was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/nextSibling was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL src was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL src was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/append was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/append was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/application/x-www-form-urlencoded was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/application/x-www-form-urlencoded was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _next was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _next was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aws/credentials was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/aws was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-07 10:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/aws was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/jsonp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/jsonp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/email_exists was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-07 10:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/email_exists was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/login_top_lang_select was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-07 10:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/login_top_lang_select was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.dev.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/loginWrapper was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-07 10:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/loginWrapper was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/loginWrapper_inner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-07 10:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/loginWrapper_inner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/loginLogo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-07 10:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/loginLogo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: outputs.tf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/email was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-07 10:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/email was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/loginInput was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-07 10:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/loginInput was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/keydown.intlTelInput ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/keydown.intlTelInput ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin_login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/build/js/Botswana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/build/js/Botswana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/src was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/src was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/container was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/container was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/loginControl was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/loginControl was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/bottom was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/bottom was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL next was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL next was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/s3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-06-07 10:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/s3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/next was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/next was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL angular was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL angular was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codefresh.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codefresh.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scripts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scripts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ts ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2026-06-07 10:30:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-07 10:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: samconfig.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-prod.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL build/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL build/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL vue was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL vue was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _dev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/keydown.sb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/keydown.sb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: local.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.prod.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application-dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 10:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2026-06-07 10:30:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-07 10:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/jquery.min.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 10:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 10:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 10:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 11:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/lgbg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 11:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/lgbg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 11:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 11:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 11:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nobody/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 11:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nobody/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 11:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 11:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 11:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 11:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 11:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 11:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 11:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skin/default_1/images/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 11:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skin/default_1/images/logo.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 11:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 11:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 11:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 11:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 11:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 11:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 11:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 11:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 11:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 11:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 11:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 11:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 12:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 12:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 12:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 12:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 12:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ctb4sq73_3i3pgh was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 12:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ctb4sq73_3i3pgh was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 12:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 8jamjtebap was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 12:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 8jamjtebap was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 13:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 13:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 13:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 13:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 13:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 13:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dr0v was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 14:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 14:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 14:05:27 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 14:05:27 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 14:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boaform/adminformLogout/boaform/admin/formPing6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 14:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boaform/adminformLogout/boaform/admin/formPing6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 14:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 14:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-application-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-application-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcloud-service-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcloud-service-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application_default_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application_default_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-private-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-private-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service_account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service_account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 16:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 16:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 17:19:33 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 17:19:33 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 17:19:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1780841973 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 17:19:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 17:19:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1780841973 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 17:19:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 17:19:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 17:19:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 17:19:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 17:19:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 17:19:35 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 17:19:35 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 17:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 17:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.aliyun/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.aliyun/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.aliyun/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.aliyun/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.tencent/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.tencent/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.qcloud/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.qcloud/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.github/workflows/deploy.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.github/workflows/deploy.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:03:47 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 18:03:47 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 18:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1780844627 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 18:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1780844627 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 18:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 18:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 18:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 18:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 18:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 18:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 18:03:49 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 18:03:49 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 18:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/script.js.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/owl.carousel.js.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/build/js/intlTelInput.js.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env.staging ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env.local ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.env.production ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aliyun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: oss.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.git/config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alicloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.aliyun/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.aliyun/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aliyun.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/oss.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tencent_config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cos.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qcloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.aliyun/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.aliyun/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/tencent.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/cos.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.qcloud/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.qcloud/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.tencent/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.tencent/credentials ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.gitlab-ci.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloud.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api_keys.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.github/workflows/deploy.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;.github/workflows/deploy.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/main.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dist/js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/app.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bundle.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_moment.min.js.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_owl.carousel.min.js.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:06:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:06:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.map ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:06:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:06:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:06:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:06:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.old ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/scroll_wow.min.js.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 18:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 18:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 19:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 19:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 19:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 19:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 19:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 19:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 19:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 19:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 19:32:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 19:32:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 19:32:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 19:32:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 19:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 19:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 19:59:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 19:59:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 20:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 20:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1780851599 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 20:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 20:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1780851599 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 20:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 20:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 20:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 20:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 20:00:01 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 20:00:01 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 20:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 20:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 20:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 20:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sites/default/settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 20:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 20:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/etc/env.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 20:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 20:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mcp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 20:32:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 20:32:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 20:32:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 20:32:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 21:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 21:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:34:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:34:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:34:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:34:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:34:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:34:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 21:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 21:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 21:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 21:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 21:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 21:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 21:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-application-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-application-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/client_secret.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp_key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-adminsdk.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application_default_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application_default_credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcloud-service-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gcloud-service-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-services.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-private-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sa-private-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keyfile.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/gcp-credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets/gcp-key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: serviceAccountKey.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: google-service-account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service_account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: service_account.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 21:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 21:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cs61s_ml6c1b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 21:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cs61s_ml6c1b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 22:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 22:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 22:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wiki was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 22:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wiki was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 22:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 22:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 22:59:44 --- ERROR: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
2026-06-07 22:59:44 --- STRACE: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH/classes/controller/passengers.php [ 1303 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(1303): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 1303, Array)
#1 [internal function]: Controller_Passengers->action_login()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-06-07 23:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 23:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 23:13:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL onvif/device_service was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 23:13:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL onvif/device_service was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 23:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 23:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 23:14:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-06-07 23:14:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-06-07 23:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 23:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 23:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 23:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 23:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 23:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 23:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 23:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-config.php.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 23:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 23:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 23:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 23:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 23:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 23:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 23:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 23:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 23:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 23:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 23:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-06-07 23:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-06-07 23:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 23:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 23:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 23:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 23:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 23:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-06-07 23:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-06-07 23:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ___proxy_subdomain_whm/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}