<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2026-01-01 00:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 00:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 00:29:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-01-01 00:29:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-01-01 00:53:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 00:53:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 01:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 01:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 02:00:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-01-01 02:00:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-01-01 02:55:06 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-01-01 02:55:06 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-01-01 03:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 03:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 03:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 03:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 03:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 03:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 03:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 03:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 04:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 04:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 04:03:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-01-01 04:03:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/text/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 05:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 05:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 05:33:08 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-01-01 05:33:08 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-01-01 05:42:37 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-01-01 05:42:37 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-01-01 05:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 05:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 06:17:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 06:17:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 06:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 06:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 06:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 06:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 07:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOL+/Java.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 07:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOL+/Java.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 07:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon_forms.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 07:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon_forms.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 07:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOL+/a1.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 07:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOL+/a1.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 07:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 07:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 08:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 08:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 08:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: epa/scripts/win/nsepa_setup.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 08:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: epa/scripts/win/nsepa_setup.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 09:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 09:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 09:48:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 09:48:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 09:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 09:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 10:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 10:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 10:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 10:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 11:08:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 11:08:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 11:35:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-01-01 11:35:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-01-01 11:35:18 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-01-01 11:35:18 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-01-01 11:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1767256518 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 11:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1767256518 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 11:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 11:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 11:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 11:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 11:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 11:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 11:35:19 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-01-01 11:35:19 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-01-01 11:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 11:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 11:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 11:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 11:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 11:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/info/system was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 11:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 11:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin/cores was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 11:35:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 11:35:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 11:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 11:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 11:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 11:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 11:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 11:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 11:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 11:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 11:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 11:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 11:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 11:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 11:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 11:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 11:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 11:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 11:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 11:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ip.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ip.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.indiprotechnologies.com.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.com.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indiprotechnologies.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: grandlimo.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2026.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ROOT.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wwwroot.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webapps.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public_html.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_1.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_2.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_3.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_4.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backups.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bin.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Release.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inetpub.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmp.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ftp.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf/conf.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.tgz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.tar.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.Z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sqlitedb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.bz2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sqlite ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.war ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.xz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.lz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: old.sql.tar.z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 12:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2g was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 12:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 12:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ab2h was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 12:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: alive.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 12:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 12:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 12:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 12:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 12:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teorema505 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 14:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 14:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 14:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 14:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 14:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 14:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 15:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 15:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 15:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 15:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 17:14:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 17:14:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 17:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 17:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 17:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 17:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shell was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 18:13:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 18:13:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 18:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 18:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 18:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 18:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 19:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOL+/Java.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 19:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOL+/Java.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 19:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon_forms.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 19:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon_forms.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 19:10:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOL+/a1.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 19:10:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOL+/a1.jar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 19:10:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 19:10:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/transfer.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: security.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webclient was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webclient was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:31:30 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2026-01-01 20:31:30 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2026-01-01 20:47:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:47:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:19 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2026-01-01 20:47:19 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-01-01 20:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-01-01 20:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-01-01 20:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webjars/swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webjars/swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:47:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:47:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:47:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 20:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 20:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 20:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 20:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap_index.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap_index.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:38:58 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-01-01 21:38:58 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2026-01-01 21:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:51:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2026-01-01 21:51:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2026-01-01 21:51:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-01-01 21:51:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2026-01-01 21:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:51:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:51:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:51:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:51:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webjars/swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:51:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webjars/swagger-ui/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:51:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:51:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/v1/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:51:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:51:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v3/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api-docs/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 21:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 21:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 21:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 21:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 22:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 22:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 22:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap_index.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 22:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap_index.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 22:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 22:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL SDK/webLanguage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 22:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 22:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/formJsonAjaxReq was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 22:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2026-01-01 22:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2026-01-01 22:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2026-01-01 22:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2026-01-01 23:19:37 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2026-01-01 23:19:37 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}