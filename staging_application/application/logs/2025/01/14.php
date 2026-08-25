<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-01-14 00:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 00:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/x.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 00:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 00:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 00:30:02 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-14 00:30:02 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-14 01:43:25 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-01-14 01:43:25 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-01-14 02:06:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 02:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 02:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 02:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 04:28:33 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-14 04:28:33 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-14 04:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 04:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 04:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 04:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 05:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 05:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 05:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 05:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 05:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 05:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 05:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 05:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 05:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 05:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 05:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 05:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 05:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 05:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 05:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 05:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 05:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 05:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 05:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 05:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 05:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 05:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 06:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 06:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: logon.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 06:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 06:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 06:04:17 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-01-14 06:04:17 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-01-14 06:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 06:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: doc/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 06:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 06:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 06:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 06:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:33 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-14 08:27:33 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-14 08:27:39 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-14 08:27:39 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1736832459 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1736832459 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-14 08:27:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL k1sM was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL k1sM was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1736832459 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nmaplowercheck1736832459 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CSS/Miniweb.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/WPnBr.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: confluence/rest/applinks/1.0/manifest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:42 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-14 08:27:42 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: human.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools/default/buckets was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal/Portal.mwsl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-cached/hc/HostCheckerInstaller.osx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Gyl0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Gyl0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docs/cplugError.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/nc/nc_gina_ver.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Portal0000.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __Additional was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/componentutils was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: geoserver/web/wicket/bookmarkable/org.geoserver.web.AboutGeoServerPage ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/list.query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/list.query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: menu.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Account/Login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/info.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/server/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-01-14 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/server/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/manifests/files/joomla.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/manifests/files/joomla.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xml/info.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: language/en-GB/en-GB.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: language/en-GB/en-GB.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL magento_version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: start.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL versa/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL versa/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-01-14 08:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/check-version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.pl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fog/management/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: helpdesk/WebObjects/Helpdesk.woa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: indice.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/list.query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cluster/list.query ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/zxtm/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: base.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/server/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-01-14 08:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/server/version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 08:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main.jsa ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/manifests/files/joomla.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/manifests/files/joomla.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: default.shtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localstart.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 08:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inicio.jhtml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 08:27:52 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-14 08:27:52 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-14 08:27:52 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-14 08:27:52 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-14 08:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 08:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 10:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 10:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 10:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 10:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 11:35:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 11:35:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 11:35:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 11:35:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 12:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 12:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 12:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 12:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 12:29:16 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-01-14 12:29:16 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-01-14 12:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 12:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 13:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 13:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 13:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 13:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php_info.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 13:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 13:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _profiler/phpinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 13:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 13:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 13:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 13:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/shared/config/config.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 13:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 13:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 13:22:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 13:22:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 13:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 13:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 13:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 13:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 13:32:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 13:32:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 13:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 13:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 14:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 14:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 15:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 15:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 15:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 15:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 16:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 16:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cdn-cgi/trace was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 16:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 16:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/env was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 16:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 16:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-cgi/php-cgi.exe ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 16:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 16:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 16:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 16:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 16:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 16:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 16:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 16:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/_catalog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 16:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 16:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 16:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 16:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 16:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 16:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _all_dbs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 16:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 16:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: s/331313e2438313e28323e24333/_/;/META-INF/maven/com.atlassian.jira/jira-webapp-dist/pom.properties ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 16:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 16:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 16:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 16:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 17:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 17:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/logon.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 17:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 17:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sra_{BA195980-CD49-458b-9E23-C84EE0ADCD75} was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 18:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cf_scripts/scripts/ajax/ckeditor/ckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 18:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 18:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 18:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 18:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/historypage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/historypage.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:41:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aspera/faspex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 18:41:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aspera/faspex was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 18:41:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:41:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 18:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL owa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 18:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/config.exp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/config.exp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/authLogin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ext-js/app/common/zld_product_spec.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitecore/shell/sitecore.version.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitecore/shell/sitecore.version.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL internal_forms_authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 18:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL internal_forms_authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 18:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL partymgr/control/main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 18:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL partymgr/control/main was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 18:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 18:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 18:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/NewWindow_2_all.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/NewWindow_2_all.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL identity was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 18:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL identity was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 18:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owncloud/status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: status.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 18:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webfig was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 18:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.do ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.do ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/session/properties was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-01-14 18:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/session/properties was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 18:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon-32x32.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon-32x32.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: OA_HTML/AppsLocalLogin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: OA_HTML/AppsLocalLogin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL WebInterface was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 18:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL WebInterface was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 18:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zabbix/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zabbix/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sugar_version.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Telerik.Web.UI.WebResource.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Telerik.Web.UI.WebResource.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 18:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 18:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: showLogin.cc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 19:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/home/js/check.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 19:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Public/home/js/check.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 19:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/javascript/hetong.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 19:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/admin/javascript/hetong.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 20:40:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-01-14 20:40:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-01-14 21:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 21:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ecp/Current/exporttool/microsoft.exchange.ediscovery.exporttool.application ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 21:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nacos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-01-14 21:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nacos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-01-14 21:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 21:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 22:07:04 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
2025-01-14 22:07:04 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 328 ]
--
#0 /var/www/html/application/classes/common_config.php(328): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 328, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-01-14 22:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-01-14 22:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-01-14 22:39:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-01-14 22:39:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}