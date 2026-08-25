<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-07-09 00:29:04 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-09 00:29:04 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-09 01:12:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 01:12:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 01:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/tmindex.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 01:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/tmindex.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 01:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 01:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 01:33:55 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-09 01:33:55 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-09 01:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 01:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 01:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 01:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 01:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 01:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 01:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 01:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 01:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 01:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 01:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/open ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 01:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/open ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 01:41:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 01:41:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staging/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 01:41:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 01:41:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL info was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 01:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 01:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 01:41:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 01:41:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 01:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 01:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 01:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace/cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 01:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace/cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 01:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 01:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 01:54:29 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-09 01:54:29 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-09 02:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 02:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 02:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 02:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 02:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 02:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 02:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 02:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 02:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 02:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 02:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 02:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 02:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 02:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 02:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 02:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 02:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 02:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 03:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 03:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 03:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/Admin/css/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 03:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/Admin/css/lib/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 03:59:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-09 03:59:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-09 04:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 04:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 05:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 05:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 05:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 05:20:07 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-07-09 05:20:07 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 05:20:10 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-07-09 05:20:10 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 05:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gateway/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 05:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gateway/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 05:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gateway/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 05:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gateway/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 05:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-09 05:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 05:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-09 05:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 05:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-09 05:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 05:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-09 05:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 05:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/actuator;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/actuator;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 05:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 05:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/actuator;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/actuator;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 05:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 05:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 06:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 06:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 06:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 06:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpn/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 07:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 07:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL portal/redlion was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 08:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 08:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 08:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 08:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 08:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 08:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 08:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 08:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 08:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/tmindex.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 08:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/tmindex.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 08:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 08:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon/LogonPoint/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL @vite/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 09:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 09:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client_secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pinfo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: etc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cp/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 09:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 09:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: production/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-instance.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-instance.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-user.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-user.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-prod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2-prod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-private.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-data.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.prod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.prod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys_backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws_keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-access.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-access.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-buckets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-buckets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-bucket.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3-bucket.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-prod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-prod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-export.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-dev.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accesskey.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accesskey.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikeys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-policy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-policy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudfront.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accesskeys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: accesskeys.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-deploy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-deploy.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-role.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-role.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudformation.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-function.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda-function.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform-backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-user.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam-user.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto-config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform-state.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform-state.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudwatch.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudwatch.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto-profile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 10:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boto-profile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 10:13:48 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-09 10:13:48 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-09 10:14:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 10:14:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 10:14:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 10:14:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 10:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 10:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 10:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 10:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 12:13:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 12:13:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 12:35:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 12:35:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 12:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 12:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: form.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 12:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 12:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upl.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 12:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 12:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL t4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 12:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 12:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoip was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 12:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 12:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 12:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 12:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 12:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 12:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: systembc/password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 12:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 12:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: password.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: src.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: frontend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.production.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: router.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: router.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.mod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.mod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.sum.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.sum.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cicd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cicd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci_cd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci_cd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jinja2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jinja2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudbuild.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudbuild.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dashboard.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflow.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflow.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wordpress.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: routes.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: creds.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controllers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: handlers.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ec2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: middleware.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: router.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: router.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s3.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bucket.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: run.py.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.go.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pkg.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: internal.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: node_modules.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: template.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.mod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.mod.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: layout.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.sum.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: go.sum.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: templates.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jinja2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jinja2.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: trace.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mail.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mailer.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerfile.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: deployment.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: smtp.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflow.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: workflow.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: symfony.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cicd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cicd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev_env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci_cd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ci_cd.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: output.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vercel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudbuild.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudbuild.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cloudflare.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: netlify.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 14:04:21 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-09 14:04:21 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-09 14:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 14:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 15:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 15:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 15:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 15:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 15:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:58:15 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-07-09 15:58:15 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:58:15 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-07-09 15:58:15 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gateway/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 15:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gateway/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gateway/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 15:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gateway/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-09 15:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-09 15:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-09 15:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-09 15:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/actuator;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/actuator;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 15:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 15:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/actuator;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/actuator;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 15:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 15:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 16:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 16:18:58 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-09 16:18:58 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-09 17:18:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-07-09 17:18:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-07-09 18:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 18:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 19:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/aws.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: log.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: error.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: keys.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.py ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: debug.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-exports.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: access_keys.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: firebase.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: twilio.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: development.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secrets_backup.tar.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codebase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codebase.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: key.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-exports.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws-exports.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: source_code.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prod.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/app.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logs/access.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikey.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apikey.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfvars ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: terraform.tfstate ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam_policy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: iam_policy.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awscloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: awscloud.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: token.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: secret.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: https:/34.28.184.113/public/uploads/favicon ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: https:/34.28.184.113/public/uploads/favicon ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 19:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 19:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 20:10:09 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-09 20:10:09 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-09 20:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: https:/34.28.184.113/public/uploads/favicon ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 20:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: https:/34.28.184.113/public/uploads/favicon ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 22:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 22:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 22:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 22:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugins/webuploader/0.1.5/webuploader.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:34:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 23:34:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 23:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:34:42 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-07-09 23:34:42 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:34:44 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-07-09 23:34:44 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gateway/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 23:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gateway/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gateway/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 23:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gateway/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-09 23:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-09 23:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-09 23:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:34:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-07-09 23:34:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:35:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/actuator;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/actuator;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 23:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: actuator/;env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/actuator;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/actuator;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gateway;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/actuator/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:35:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:35:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api;/env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:39:33 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-09 23:39:33 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-09 23:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 23:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1752093573 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 23:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL odinhttpcall1752093573 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 23:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 23:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL evox/about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-07-09 23:39:34 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-07-09 23:39:34 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-07-09 23:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-07-09 23:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-07-09 23:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-07-09 23:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}